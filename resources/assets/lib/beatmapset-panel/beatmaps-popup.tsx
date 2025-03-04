// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

import BeatmapListItem from 'components/beatmap-list-item';
import { Portal } from 'components/portal';
import BeatmapJson from 'interfaces/beatmap-json';
import GameMode from 'interfaces/game-mode';
import { route } from 'laroute';
import { action, makeObservable, observable } from 'mobx';
import { observer } from 'mobx-react';
import core from 'osu-core-singleton';
import * as React from 'react';
import { TransitionStatus } from 'react-transition-group';
import { classWithModifiers } from 'utils/css';

interface Props {
  groupedBeatmaps: Map<GameMode, BeatmapJson[]>;
  onMouseEnter: () => void;
  onMouseLeave: () => void;
  parent: HTMLElement | null;
  state: TransitionStatus;
  transitionDuration: number;
}

const beatmapsPopupTransitionStyles: Record<TransitionStatus, React.CSSProperties> = {
  entered: { opacity: 1 },
  entering: {},
  exited: {},
  exiting: {},
  unmounted: {},
};

const Item = observer(({ beatmaps }: { beatmaps: BeatmapJson[] }) => (
  <div className='beatmaps-popup__group'>
    {beatmaps.map((beatmap) => <ItemRow key={beatmap.id} beatmap={beatmap} />)}
  </div>
));

const ItemRow = observer(({ beatmap }: { beatmap: BeatmapJson }) => (
  <a
    className='beatmaps-popup-item'
    href={route('beatmaps.show', { beatmap: beatmap.id })}
  >
    <BeatmapListItem beatmap={beatmap} />
  </a>
));

@observer
export default class BeatmapsPopup extends React.Component<Props> {
  contentRef = React.createRef<HTMLDivElement>();
  @observable position = {
    left: '0px',
    top: '0px',
    width: '0px',
  };

  constructor(props: Props) {
    super(props);
    makeObservable(this);
  }

  componentDidMount() {
    $(window).on('resize', this.updatePosition);
  }

  componentWillUnmount() {
    $(window).off('resize', this.updatePosition);
  }

  render() {
    this.updatePosition();
    const style: React.CSSProperties = {
      opacity: 0,
      transitionDuration: `${this.props.transitionDuration}ms`,
      ...beatmapsPopupTransitionStyles[this.props.state],
      ...this.position,
    };

    return (
      <Portal>
        <div
          ref={this.contentRef}
          className={classWithModifiers('beatmaps-popup', [`size-${core.userPreferences.get('beatmapset_card_size')}`])}
          onMouseEnter={this.props.onMouseEnter}
          onMouseLeave={this.props.onMouseLeave}
          style={style}
        >
          <div className='beatmaps-popup__content'>
            {[...this.props.groupedBeatmaps].map(([mode, beatmaps]) => (
              beatmaps.length > 0 && <Item key={mode} beatmaps={beatmaps} />
            ))}
          </div>
        </div>
      </Portal>
    );
  }

  @action
  private readonly updatePosition = () => {
    const parent = this.props.parent;

    if (parent == null) return;

    const parentRects = parent.getBoundingClientRect();

    this.position.top = `${window.scrollY + parentRects.bottom}px`;
    this.position.left = `${window.scrollX + parentRects.left}px`;
    this.position.width = `${parentRects.width}px`;
  };
}
