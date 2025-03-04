<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'discussion-votes' => [
        'update' => [
            'error' => 'Neuspešna posodobitev glasovanja',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'dovoli kudosu',
        'beatmap_information' => 'Stran beatmap',
        'delete' => 'odstrani',
        'deleted' => 'Odstranil :editor :delete_time.',
        'deny_kudosu' => 'zavrni kudosu',
        'edit' => 'uredi',
        'edited' => 'Uredil :editor :update_time.',
        'guest' => 'Gostiteljeva težavnost od :user',
        'kudosu_denied' => 'Zavrnjena pridobitev kudosu.',
        'message_placeholder_deleted_beatmap' => 'Ta težavnost je bila odstranjena in razprava ni več mogoča.',
        'message_placeholder_locked' => 'Razprava ta to beatmapo je bila onemogočena.',
        'message_placeholder_silenced' => "Objava pogovora ni mogoča medtem, ko si utišan.",
        'message_type_select' => 'Izberi Tip Komentarja',
        'reply_notice' => 'Pritisni enter za odgovor.',
        'reply_placeholder' => 'Vnesi svoj odgovor tukaj',
        'require-login' => 'Za objavo ali odgovor se prijavi',
        'resolved' => 'Rešeno',
        'restore' => 'povrni',
        'show_deleted' => 'Prikaži izbrisano',
        'title' => 'Razprave',

        'collapse' => [
            'all-collapse' => 'Strni vse',
            'all-expand' => 'Razširi vse',
        ],

        'empty' => [
            'empty' => 'Ni še razprav!',
            'hidden' => 'Nobena razprava ne ustreza izbranim filtrom.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Zakleni razpravo',
                'unlock' => 'Odkleni razpravo',
            ],

            'prompt' => [
                'lock' => 'Razlog za zaklep',
                'unlock' => 'Ali si prepričan za odklepanje?',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Ta objava bo objavljena v splošno razpravo beatmap. Za moddanje te beatmape, pri sporočilu začni s časovno oznako (npr. 00:12:345).',
            'in_timeline' => 'Za moddanje več časovnih oznak, objavi to večkrat (ena objava na časovno oznako).',
        ],

        'message_placeholder' => [
            'general' => 'Za objavo v Splošno piši tukaj (:version)',
            'generalAll' => 'Za objavo v Splošno piši tukaj (Vse težavnosti)',
            'review' => 'Za objavo pregleda piši tukaj',
            'timeline' => 'Za objavo na Časovnico piši tukaj (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Diskvalificiraj',
            'hype' => 'Hype!',
            'mapper_note' => 'Opomba',
            'nomination_reset' => 'Ponastavi nominacijo',
            'praise' => 'Pohvali',
            'problem' => 'Težava',
            'problem_warning' => 'Prijavi težavo',
            'review' => 'Pregled',
            'suggestion' => 'Predlog',
        ],

        'mode' => [
            'events' => 'Zgodovina',
            'general' => 'Splošno :scope',
            'reviews' => 'Pregledi',
            'timeline' => 'Časovnica',
            'scopes' => [
                'general' => 'Ta težavnost',
                'generalAll' => 'Vse težavnosti',
            ],
        ],

        'new' => [
            'pin' => '',
            'timestamp' => '',
            'timestamp_missing' => '',
            'title' => '',
            'unpin' => '',
        ],

        'review' => [
            'new' => '',
            'embed' => [
                'delete' => '',
                'missing' => '',
                'unlink' => '',
                'unsaved' => '',
                'timestamp' => [
                    'all-diff' => '',
                    'diff' => '',
                ],
            ],
            'insert-block' => [
                'paragraph' => '',
                'praise' => '',
                'problem' => '',
                'suggestion' => '',
            ],
        ],

        'show' => [
            'title' => '',
        ],

        'sort' => [
            'created_at' => '',
            'timeline' => '',
            'updated_at' => '',
        ],

        'stats' => [
            'deleted' => '',
            'mapper_notes' => '',
            'mine' => '',
            'pending' => '',
            'praises' => '',
            'resolved' => '',
            'total' => '',
        ],

        'status-messages' => [
            'approved' => '',
            'graveyard' => "",
            'loved' => '',
            'ranked' => '',
            'wip' => '',
        ],

        'votes' => [
            'none' => [
                'down' => '',
                'up' => '',
            ],
            'latest' => [
                'down' => '',
                'up' => '',
            ],
        ],
    ],

    'hype' => [
        'button' => '',
        'button_done' => '',
        'confirm' => "",
        'explanation' => '',
        'explanation_guest' => '',
        'new_time' => "",
        'remaining' => '',
        'required_text' => '',
        'section_title' => '',
        'title' => '',
    ],

    'feedback' => [
        'button' => '',
    ],

    'nominations' => [
        'delete' => '',
        'delete_own_confirm' => '',
        'delete_other_confirm' => '',
        'disqualification_prompt' => 'Razlog za diskvalifikacijo?',
        'disqualified_at' => 'Diskvalificiran :time_ago (:reason).',
        'disqualified_no_reason' => 'razlog ni naveden',
        'disqualify' => 'Diskvalificiraj',
        'incorrect_state' => 'Napaka pri izvajanju tega dejanja, poskusi osvežiti stran.',
        'love' => 'Love',
        'love_choose' => 'Izberi težavnost za loved',
        'love_confirm' => 'Obožuješ to beatmapo?',
        'nominate' => 'Nominiraj',
        'nominate_confirm' => 'Nominacija te beatmape?',
        'nominated_by' => 'nominiral :users',
        'not_enough_hype' => "Ni dovolj hype točk.",
        'remove_from_loved' => 'Odstrani iz Loved',
        'remove_from_loved_prompt' => 'Razlog za odstranitev iz Loved:',
        'required_text' => 'Nominacije: :current/:required',
        'reset_message_deleted' => 'odstranjeno',
        'title' => 'Stanje nominacije',
        'unresolved_issues' => 'Tukaj so nerešene težave, ki morajo biti najprej obravnavane.',

        'rank_estimate' => [
            '_' => 'Ta beatmapa bo približno rankirana :date če ne bo najdenih težav. Trenutno je #:position v :queue.',
            'queue' => 'čakalna vrsta rankiranja',
            'soon' => 'kmalu',
        ],

        'reset_at' => [
            'nomination_reset' => ':user je ponastavil nominacijski postopek :time_ago z novo težavo :discussion (:message).',
            'disqualify' => ':user je diskvalificiral beatmapo :time_ago z novo težavo :discussion (:message).',
        ],

        'reset_confirm' => [
            'disqualify' => 'Ali si prepričan? To bo odstranilo beatmapo iz kvalificiranja in ponastavilo nominacijski postopek.',
            'nomination_reset' => 'Ali si prepričan? Objava nove težave bo ponastavilo nominacijski postopek.',
            'problem_warning' => 'Ali si prepričan za prijavo težave k tej beatmapi? To bo opozorilo Beatmap Nominatorje.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'vpiši ključne besede...',
            'login_required' => 'Za iskanje se vpiši.',
            'options' => 'Več Možnosti Iskanja',
            'supporter_filter' => 'Filtriranje po :filters je potrebna aktivna osu!supporter značka',
            'not-found' => 'ni rezultatov',
            'not-found-quote' => '... ne, nič najdeno.',
            'filters' => [
                'extra' => 'Ekstra',
                'general' => 'Splošno',
                'genre' => 'Žanr',
                'language' => 'Jezik',
                'mode' => 'Igralni način',
                'nsfw' => 'Eksplicitna Vsebina',
                'played' => 'Igrano',
                'rank' => 'Pridobljeni Rank',
                'status' => 'Kategorije',
            ],
            'sorting' => [
                'title' => 'Naslov',
                'artist' => 'Ustvarjalec',
                'difficulty' => 'Težavnost',
                'favourites' => 'Priljubljeni',
                'updated' => 'Posodobljeno',
                'ranked' => 'Rankirano',
                'rating' => 'Ocena',
                'plays' => 'Igranja',
                'relevance' => 'Ustreznost',
                'nominations' => 'Nominacije',
            ],
            'supporter_filter_quote' => [
                '_' => 'Filtriranje po :filters je potreben aktivni :link',
                'link_text' => 'osu!supporter značka',
            ],
        ],
    ],
    'general' => [
        'converts' => 'Vključi pretvorjene beatmape',
        'featured_artists' => 'Priznani ustvarjalci',
        'follows' => '',
        'recommended' => 'Priporočena težavnost',
        'spotlights' => 'Beatmapa v središču pozornosti',
    ],
    'mode' => [
        'all' => 'Vse',
        'any' => 'Vse',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
    ],
    'status' => [
        'any' => 'Vse',
        'approved' => 'Odobreno',
        'favourites' => 'Priljubljeni',
        'graveyard' => 'Pokopališče',
        'leaderboard' => 'Vsebuje lestvico najboljših',
        'loved' => 'Loved',
        'mine' => 'Moje beatmape',
        'pending' => 'V čakanju',
        'wip' => 'WIP',
        'qualified' => 'Kvalificirano',
        'ranked' => 'Rankirano',
    ],
    'genre' => [
        'any' => 'Vse',
        'unspecified' => 'Nedoločeno',
        'video-game' => 'Video igra',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Drugo',
        'novelty' => 'Novost',
        'hip-hop' => 'Hip Hop',
        'electronic' => '',
        'metal' => '',
        'classical' => '',
        'folk' => '',
        'jazz' => '',
    ],
    'mods' => [
        '4K' => '',
        '5K' => '',
        '6K' => '',
        '7K' => '',
        '8K' => '',
        '9K' => '',
        'AP' => '',
        'DT' => '',
        'EZ' => '',
        'FI' => '',
        'FL' => '',
        'HD' => '',
        'HR' => '',
        'HT' => '',
        'MR' => '',
        'NC' => '',
        'NF' => '',
        'NM' => '',
        'PF' => '',
        'RX' => '',
        'SD' => '',
        'SO' => '',
        'TD' => '',
        'V2' => '',
    ],
    'language' => [
        'any' => '',
        'english' => '',
        'chinese' => '',
        'french' => '',
        'german' => '',
        'italian' => '',
        'japanese' => '',
        'korean' => '',
        'spanish' => '',
        'swedish' => '',
        'russian' => '',
        'polish' => '',
        'instrumental' => '',
        'other' => '',
        'unspecified' => '',
    ],

    'nsfw' => [
        'exclude' => '',
        'include' => '',
    ],

    'played' => [
        'any' => '',
        'played' => '',
        'unplayed' => '',
    ],
    'extra' => [
        'video' => '',
        'storyboard' => '',
    ],
    'rank' => [
        'any' => '',
        'XH' => '',
        'X' => '',
        'SH' => '',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
    'panel' => [
        'playcount' => '',
        'favourites' => '',
    ],
    'variant' => [
        'mania' => [
            '4k' => '',
            '7k' => '',
            'all' => '',
        ],
    ],
];
