<?php

return [
    'baseUrl' => 'https://www.ecole-de-toilettage.com/',
    'production' => true,
    'siteName' => 'École de toilettage - le guide du métier toilettage canin - toiletteur de chien',
    'siteDescription' => "Toilettage canin - toiletteur de chien, le métier, le marché et ses attentes, les qualités du toiletteur - l'activité - combien de salons de toilettage, le budget salon de toilettage, les formes juridiques de l'activité, la règlementation, la formation, le métier de toiletteur",

    // Algolia DocSearch credentials
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
