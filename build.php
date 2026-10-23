<?php

const NOTICE = [
    "2026/10/09" => "WeVocal Studioを公開！",
];

const PROJECTS = [
    'wevocalstudio' => [
        'title' => 'WeVocal Studio',
        'description' => 'メイン、Web上で音声を波形ブロックとして操作する音声編集ツール (←DAWになりたいマン)',
        'url' => 'https://wevocalstudio.pitan76.net/',
        'wiki' => null,
        'image' => './image/studio_ui.png',
        'icon' => './image/studio.png',
        'type' => 'main',
    ],
    'wevocalsynth' => [
        'title' => 'WeVocalSynth',
        'description' => 'パスタ、Web上で音声の音程や時間を編集する音声加工ツール',
        'url' => 'https://wevocalsynth.pitan76.net/',
        'wiki' => 'https://doku.wikichree.com/wevocalsynth/',
        'image' => './image/synth_ui.png',
        'icon' => './image/synth.png',
        'type' => 'main',
    ],

    'wevocalextractor' => [
        'title' => 'WeVocalExtractor',
        'description' => 'サラダ、Web上で曲からボーカルと伴奏を抽出する音源分離ツール',
        'url' => 'https://wevocalextractor.pitan76.net/',
        'wiki' => null,
        'image' => './image/extractor_ui.png',
        'icon' => './image/extractor.png',
        'type' => 'sub',
    ],

    'wevocalconverter' => [
        'title' => 'WeVocalConverter',
        'description' => 'スープ、Web上での音声ファイル形式変換ツール',
        'url' => 'https://wevocalconverter.pitan76.net/',
        'wiki' => null,
        'image' => './image/converter_ui.png',
        'icon' => './image/converter.png',
        'type' => 'sub',
    ],

    'wevocalanalyzer' => [
        'title' => 'WeVocalAnalyzer',
        'description' => '前菜、Web上で音声を解析するための音源解析ツール',
        'url' => 'https://wevocalanalyzer.pitan76.net/',
        'wiki' => null,
        'image' => './image/analyzer_ui.png',
        'icon' => './image/analyzer.png',
        'type' => 'sub',
    ],

    'wevocalpluginpkgs' => [
        'title' => 'WeVocal Plugin Packages',
        'description' => 'WeVocal/WAM/VSTプラグインをまとめてWeVocalシリーズ用に管理するためのリポジトリ',
        'url' => 'https://plugins.wevocal.pitan76.net/',
        'wiki' => null,
        'image' => null,
        'icon' => null,
        'type' => 'sub',
    ],
];

global $mainProjects, $subProjects;
$mainProjects = array_filter(PROJECTS, fn($info) => $info['type'] === 'main');
$subProjects = array_filter(PROJECTS, fn($info) => $info['type'] === 'sub');

ob_start();
include __DIR__ . '/index.php';
$html = ob_get_clean();

file_put_contents(__DIR__ . '/index.html', $html);
