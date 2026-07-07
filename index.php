<?php
// Default nested stream list structure (Multiple streams per station)

$default_stations = [
    [
        'name' => 'Radio Plus',
        'streams' => [
            ['name' => 'AAC 176', 'url' => 'https://rozhlas.stream/plus_high.aac', 'mime' => 'audio/aac'],
            ['name' => 'AAC 64', 'url' => 'https://rozhlas.stream/plus_low.aac', 'mime' => 'audio/aac'],
            ['name' => 'MP3 128', 'url' => 'https://rozhlas.stream/plus_mp3_128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'OGG Stream', 'url' => 'https://amp.cesnet.cz:8443/cro-plus.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/cro-plus-256.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG Stream', 'url' => 'https://amp.cesnet.cz:8443/z-cro-plus.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/z-cro-plus-256.ogg', 'mime' => 'audio/ogg']
        ]
    ],
    [
        'name' => 'Radio Beat',
        'streams' => [
            ['name' => 'AAC 128', 'url' => 'https://icecast2.play.cz/beat128aac', 'mime' => 'audio/aac'],
            ['name' => 'MP3 128', 'url' => 'https://icecast2.play.cz/radiobeat128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128 2', 'url' => 'https://icecast5.play.cz/radiobeat128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128 3', 'url' => 'https://ice5.radia.cz/beat128.mp3', 'mime' => 'audio/mpeg']


        ]
    ],
    [
        'name' => 'Rádio Impuls',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://icecast1.play.cz/impuls128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128 2', 'url' => 'https://icecast5.play.cz/impuls128.mp3?1571059741', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 64', 'url' => 'https://icecast5.play.cz/impuls64.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'ČRo 1 - Radiožurnál',
        'streams' => [
            ['name' => 'AAC 192', 'url' => 'https://icecast1.play.cz/cro1128aac', 'mime' => 'audio/aac'],
            ['name' => 'MP3 128', 'url' => 'https://icecast7.play.cz/cro1-128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128 2', 'url' => 'https://icecast8.play.cz:8443/cro1-128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'OGG High', 'url' => 'https://amp.cesnet.cz:8443/cro1.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/cro1-256.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG High', 'url' => 'https://amp.cesnet.cz:8443/z-cro1.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/z-cro1-256.ogg', 'mime' => 'audio/ogg']
        ]
    ],
    [
        'name' => 'Rock Rádio',
        'streams' => [
            ['name' => 'Default MP3', 'url' => 'https://ice.abradio.cz/sumava128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Frekvence 1',
        'streams' => [

            ['name' => 'MP3 320', 'url' => 'https://ice.actve.net/fm-frekvence1-320', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128', 'url' => 'https://ice.actve.net/fm-frekvence1-128', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Bonton',
        'streams' => [

            ['name' => 'MP3 320', 'url' => 'https://ice.actve.net/fm-bonton-320', 'mime' => 'audio/mmp3'],
            ['name' => 'MP3 320', 'url' => 'https://ice.actve.net/fm-bonton-128', 'mime' => 'audio/mpeg'],
            ['name' => 'AAC 64', 'url' => 'https://ice.actve.net/fm-bonton-aac', 'mime' => 'audio/aac']
        ]
    ],
    [
        'name' => 'Evropa 2',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://ice.actve.net/fm-evropa2-128', 'mime' => 'audio/mpeg'],
            ['name' => 'AAC 64', 'url' => 'https://29043.live.streamtheworld.com/EVROPA2AAC.aac', 'mime' => 'audio/aac']
        ]
    ],
    [
        'name' => 'Čas Rock',
        'streams' => [
            ['name' => 'MP3 192', 'url' => 'https://icecast9.play.cz/casrock192.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128', 'url' => 'https://icecast7.play.cz/casrock128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128 2', 'url' => 'https://icecast6.play.cz/casrock128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Radio Čas',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://icecast6.play.cz/casradio128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128 2', 'url' => 'https://icecast7.play.cz/casradio128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Rozk Zone',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://icecast5.play.cz/rockzone128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128 2', 'url' => 'https://icecast2.play.cz/rockzone128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Color Music Radio',
        'streams' => [
            ['name' => 'Default MP3', 'url' => 'https://icecast6.play.cz/color192.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Radio 1',
        'streams' => [
            ['name' => 'Default', 'url' => 'https://live.radio1.pf:8443/radio1', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Blaník',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://21633.live.streamtheworld.com/RADIO_BLANIKCZ_128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Humor',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://29083.live.streamtheworld.com/RADIO_HUMOR_128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128 2', 'url' => 'https://mp3stream4.abradio.cz/humor128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Oldies',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://ice.radia.cz/oldiesradio128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Hey Radio',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://icecast3.play.cz/hey-radio128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'ZUN',
        'streams' => [
            ['name' => 'MP3', 'url' => 'https://icecast9.play.cz/zun192.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Radio Relax',
        'streams' => [
            ['name' => 'MP3', 'url' => 'https://icecast7.play.cz/relax128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Rádio Regina BB',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://live.slovakradio.sk:8443/Regina_BB_128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'ČRo 2 - Praha',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://icecast6.play.cz/cro2-128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'MP3 128 2', 'url' => 'https://icecast7.play.cz:8443/cro2-128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'OGG High', 'url' => 'https://amp.cesnet.cz:8443/cro2.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/cro2-256.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG High', 'url' => 'https://amp.cesnet.cz:8443/z-cro2.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/z-cro2-256.ogg', 'mime' => 'audio/ogg']
        ]
    ],
    [
        'name' => 'ČRo 3 - Vltava',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://icecast5.play.cz/cro3-128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'Z-OGG', 'url' => 'https://amp.cesnet.cz:8443/z-cro3.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG High', 'url' => 'https://amp.cesnet.cz:8443/cro3.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/cro3-256.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'FLAC Stream', 'url' => 'https://amp.cesnet.cz:8443/cro3.flac', 'mime' => 'audio/ogg'], // HTML specifikuje type="application/ogg"
            ['name' => 'Z-OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/z-cro3-256.ogg', 'mime' => 'audio/ogg']
        ]
    ],
    [
        'name' => 'ČRo Radio Wave',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://rozhlas.stream/wave_mp3_128.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'OGG High', 'url' => 'https://amp.cesnet.cz:8443/cro-radio-wave.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/cro-radio-wave-256.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'FLAC Stream', 'url' => 'https://amp.cesnet.cz:8443/cro-radio-wave.flac', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG High', 'url' => 'https://amp.cesnet.cz:8443/z-cro-radio-wave.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/z-cro-radio-wave-256.ogg', 'mime' => 'audio/ogg']
        ]
    ],
    [
        'name' => 'ČRo Radio Junior',
        'streams' => [
            ['name' => 'MP3', 'url' => 'https://rozhlas.stream/radio_junior.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'Z-OGG', 'url' => 'https://amp.cesnet.cz:8443/z-cro-radio-junior.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG High', 'url' => 'https://amp.cesnet.cz:8443/cro-radio-junior.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/cro-radio-junior-256.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/z-cro-radio-junior-256.ogg', 'mime' => 'audio/ogg']
        ]
    ],
    [
        'name' => 'ČRo Jazz',
        'streams' => [
            ['name' => 'MP3', 'url' => 'https://rozhlas.stream/jazz.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'Z-OGG', 'url' => 'https://amp.cesnet.cz:8443/z-cro-jazz.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG High', 'url' => 'https://amp.cesnet.cz:8443/cro-jazz.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/cro-jazz-256.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'FLAC Stream', 'url' => 'https://amp.cesnet.cz:8443/cro-jazz.flac', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/z-cro-jazz-256.ogg', 'mime' => 'audio/ogg']
        ]
    ],
    [
        'name' => 'ČRo D-dur',
        'streams' => [
            ['name' => 'MP3', 'url' => 'https://rozhlas.stream/ddur.mp3', 'mime' => 'audio/mpeg'],
            ['name' => 'Z-OGG', 'url' => 'https://amp.cesnet.cz:8443/z-cro-d-dur.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG High', 'url' => 'https://amp.cesnet.cz:8443/cro-d-dur.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/cro-d-dur-256.ogg', 'mime' => 'audio/ogg'],
            ['name' => 'FLAC Stream', 'url' => 'https://amp.cesnet.cz:8443/cro-d-dur.flac', 'mime' => 'audio/ogg'],
            ['name' => 'Z-OGG 256k', 'url' => 'https://amp.cesnet.cz:8443/z-cro-d-dur-256.ogg', 'mime' => 'audio/ogg']
        ]
    ],
    [
        'name' => 'ČRo - Radiožurnál sport',
        'streams' => [
            ['name' => 'AAC 192', 'url' => 'https://rozhlas.stream/radiozurnal_sport_high.aac', 'mime' => 'audio/aac']
        ]
    ],
    [
        'name' => 'Radio Prague International',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://rozhlas.stream/cro7_mp3_128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'Classic Praha',
        'streams' => [
            ['name' => 'MP3 128', 'url' => 'https://icecast8.play.cz/classic128.mp3', 'mime' => 'audio/mpeg']
        ]
    ],
    [
        'name' => 'BBW World Service',
        'streams' => [
            ['name' => 'MP3', 'url' => 'https://stream.live.vc.bbcmedia.co.uk/bbc_world_service', 'mime' => 'audio/mpeg']
        ]
    ]
];

$stations = [];

// Polyfill for PHP versions older than 8.0
if (!function_exists('str_contains')) {
    function str_contains(string $haystack, string $needle): bool {
        return '' === $needle || false !== strpos($haystack, $needle);
    }
}

if (!empty($_GET['url'])) {
    $csv_data = $_GET['url'];
    $lines = preg_split('/\r\n|\r|\n/', trim($csv_data));
    $has_header = false;

    foreach ($lines as $line) {
        $row = str_getcsv($line, ',');
        if (empty($row) || count($row) < 2) continue;
        if (!$has_header && strtolower($row[0]) === 'name' && strtolower($row[1]) === 'url') {
            $has_header = true;
            continue;
        }
        $name = trim($row[0]);
        $url = trim($row[1]);
        if (!empty($url)) {
            $mime = str_contains(strtolower($url), '.ogg') ? 'audio/ogg' : (str_contains(strtolower($url), '.wav') ? 'audio/wav' : 'audio/mpeg');
            $stations[] = [
                'name' => !empty($name) ? $name : 'Custom Station',
                'streams' => [['name' => 'Primary Stream', 'url' => $url, 'mime' => $mime]]
            ];
        }
    }
}

if (empty($stations)) {
    $stations = $default_stations;
}

if (isset($_GET['action']) && $_GET['action'] === 'check_url' && isset($_GET['url'])) {
    header('Content-Type: application/json');
    $parts = parse_url($_GET['url']);
    if (!$parts || !isset($parts['host'])) {
        echo json_encode(['status' => 'offline']);
        exit;
    }
    $host = $parts['host'];
    $port = isset($parts['port']) ? $parts['port'] : ($parts['scheme'] === 'https' ? 443 : 80);
    $ssl = ($parts['scheme'] === 'https') ? 'ssl://' : '';
    $fp = @fsockopen($ssl . $host, $port, $errno, $errstr, 3);
    if ($fp) {
        fclose($fp);
        echo json_encode(['status' => 'online']);
    } else {
        echo json_encode(['status' => 'offline']);
    }
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'export_m3u') {
    header('Content-Type: audio/x-mpegurl');
    header('Content-Disposition: attachment; filename="playlist.m3u"');
    echo "#EXTM3U\r\n";
    foreach ($stations as $station) {
        foreach ($station['streams'] as $st) {
            echo "#EXTINF:-1," . $station['name'] . " (" . $st['name'] . ")\r\n" . $st['url'] . "\r\n";
        }
    }
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'export_single_m3u' && isset($_GET['url']) && isset($_GET['name'])) {
    $safeName = strtolower(preg_replace('/[^a-zA-Z0-9]/', '_', $_GET['name']));
    header('Content-Type: audio/x-mpegurl');
    header('Content-Disposition: attachment; filename="' . $safeName . '.m3u"');
    echo "#EXTM3U\r\n#EXTINF:-1," . $_GET['name'] . "\r\n" . $_GET['url'] . "\r\n";
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'export_json') {
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Disposition: attachment; filename="stations.json"');
    echo json_encode($stations, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'export_csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="streams.csv"');
    $output = fopen('php://output', 'w');
    fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
    fputcsv($output, ['station_name', 'stream_variant', 'url']);
    foreach ($stations as $station) {
        foreach ($station['streams'] as $st) {
            fputcsv($output, [$station['name'], $st['name'], $st['url']]);
        }
    }
    fclose($output);
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'export_xml') {
    header('Content-Type: application/xml; charset=utf-8');
    header('Content-Disposition: attachment; filename="stations.xml"');
    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><stations></stations>');
    foreach ($stations as $station) {
        $node = $xml->addChild('station');
        $node->addChild('name', htmlspecialchars($station['name']));
        $streamsNode = $node->addChild('streams');
        foreach ($station['streams'] as $st) {
            $stItem = $streamsNode->addChild('stream');
            $stItem->addChild('variant', htmlspecialchars($st['name']));
            $stItem->addChild('url', htmlspecialchars($st['url']));
            $stItem->addChild('mime', htmlspecialchars($st['mime']));
        }
    }
    echo $xml->asXML();
    exit;
}

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "https://";
$baseUrl = $protocol . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Stream Manager</title>
    <style>
        :root {
            --bg-color: #121212;
            --card-bg: #1e1e1e;
            --text-color: #e3e3e3;
            --text-muted: #a0a0a0;
            --accent-color: #2196f3;
            --border-radius: 12px;
            --success-color: #4caf50;
            --danger-color: #f44336;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0; padding: 40px 20px;
            display: flex; justify-content: center;
        }

        .container { width: 100%; max-width: 600px; }

        .stream-card {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 24px; margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3), 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        .stream-header {
            display: flex; align-items: center; justify-content: space-between; margin-bottom: 12px;
        }

        .stream-title-group {
            display: flex; align-items: center; gap: 10px; width: 100%;
        }

        .stream-name { font-size: 1.2rem; font-weight: 600; margin: 0; color: var(--text-color); }

        .equalizer-container {
            display: none; align-items: flex-end; gap: 2px;
            width: 18px; height: 14px; padding-bottom: 1px; flex-shrink: 0;
        }
        .equalizer-container.playing { display: flex; }
        .eq-bar { width: 3px; height: 3px; background-color: var(--accent-color); border-radius: 1px 1px 0 0; }

        .status-dot {
            width: 1rem; height: 1rem; border-radius: 50%;
            background: #333333; display: inline-block;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.5);
            border: 1px solid #2d2d2d; flex-shrink: 0;
        }
        .status-online { background: var(--success-color); box-shadow: 0 0 10px var(--success-color), inset 0 1px 2px rgba(255,255,255,0.3); }
        .status-offline { background: var(--danger-color); box-shadow: 0 0 10px var(--danger-color), inset 0 1px 2px rgba(255,255,255,0.3); }
        .status-checking { background: #ffeb3b; box-shadow: 0 0 10px #ffeb3b; animation: pulse 1s infinite; }

        @keyframes pulse { 0%, 100% { opacity: 0.4; } 50% { opacity: 1; } }

        .selector-container {
            margin-top: 12px;
            margin-bottom: 4px;
        }
        .stream-selector {
            width: 100%; background: #2d2d2d; color: var(--text-color);
            border: 1px solid #3d3d3d; padding: 8px 12px; border-radius: 6px;
            font-size: 0.9rem; font-weight: 500; cursor: pointer; outline: none;
        }
        .stream-selector:focus { border-color: var(--accent-color); }

        .url-container {
            display: flex; align-items: center; justify-content: flex-start; gap: 6px;
            margin-bottom: 16px; width: 100%;
        }

        .stream-link {
            font-size: 0.8rem; color: var(--text-muted); text-decoration: none;
            word-break: break-all; overflow: hidden; text-overflow: ellipsis;
            white-space: nowrap; max-width: calc(100% - 30px);
        }
        .stream-link:hover { color: var(--accent-color); text-decoration: underline; }

        .copy-url-btn {
            background: none; border: none; cursor: pointer; color: #666666;
            padding: 2px 4px; font-size: 0.85rem; border-radius: 4px;
            transition: background 0.2s, color 0.2s; display: inline-flex; align-items: center;
        }
        .copy-url-btn:hover { color: var(--accent-color); background: #2d2d2d; }

        audio { width: 100%; border-radius: 8px; filter: invert(0.88) hue-rotate(180deg); }

        .actions-group {
            display: flex; gap: 6px; align-items: center; justify-content: flex-end;
            margin-top: 12px; margin-bottom: 12px; flex-wrap: wrap;
        }

        .icon-btn {
            background: #2d2d2d; border: none; border-radius: 6px;
            padding: 6px 10px; display: flex; align-items: center; gap: 4px;
            cursor: pointer; color: #cccccc; font-size: 0.8rem; font-weight: 500;
            transition: background 0.2s, color 0.2s; text-decoration: none;
        }
        .icon-btn:hover { background: #3d3d3d; color: #ffffff; }

        .footer {
            text-align: center; margin-top: 40px; display: flex;
            justify-content: center; gap: 8px; flex-wrap: wrap;
        }

        .btn-export {
            display: inline-block; background-color: #1e1e1e; color: #cccccc;
            padding: 10px 16px; border-radius: 8px; text-decoration: none;
            font-size: 0.85rem; font-weight: 600; transition: background-color 0.2s;
            border: 1px solid #2d2d2d;
        }
        .btn-export:hover { background-color: #2d2d2d; color: #ffffff; }
        .btn-export.main-m3u { background-color: var(--accent-color); color: #ffffff; border-color: var(--accent-color); }
        .btn-export.main-m3u:hover { background-color: #1976d2; }

        .modal-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(4px);
            display: none; justify-content: center; align-items: center; z-index: 1000;
        }
        .modal-content {
            background: var(--card-bg); padding: 25px; border-radius: var(--border-radius);
            max-width: 500px; width: 90%; position: relative; box-shadow: 0 24px 38px 3px rgba(0,0,0,0.3);
            color: var(--text-color); border: 1px solid #2d2d2d;
        }
        .modal-header { font-size: 1.25rem; font-weight: 700; margin-bottom: 10px; color: #ffffff; }
        .modal-close { position: absolute; top: 15px; right: 15px; background: #2d2d2d; border: none; border-radius: 50%; width: 28px; height: 28px; cursor: pointer; color: #a0a0a0; font-weight: bold;}
        .code-box { background: #121212; color: #64b5f6; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 0.8rem; white-space: pre-wrap; word-break: break-all; margin-bottom: 12px; position: relative; border: 1px solid #2d2d2d; }
        .copy-btn { background: #2d2d2d; color: #cccccc; border: none; border-radius: 4px; padding: 4px 8px; font-size: 0.7rem; cursor: pointer; position: absolute; right: 8px; top: 8px; }
        .copy-btn:hover { background: var(--accent-color); color: white; }
        .cmd-label { font-size: 0.8rem; font-weight: 600; color: var(--text-muted); margin-bottom: 4px; }
    </style>
</head>
<body>

<div class="container">
    <?php foreach ($stations as $index => $station):
        $primaryStream = $station['streams'][0];
        $streamCount = count($station['streams']);
    ?>
        <div class="stream-card" id="card-<?= $index ?>">
            <div class="stream-header">
                <div class="stream-title-group">
                    <h2 class="stream-name" id="station-title-<?= $index ?>"><?= htmlspecialchars($station['name']) ?></h2>
                    <div class="equalizer-container" id="eq-<?= $index ?>">
                        <div class="eq-bar"></div>
                        <div class="eq-bar"></div>
                        <div class="eq-bar"></div>
                        <div class="eq-bar"></div>
                    </div>
                </div>
                <span class="status-dot" id="status-<?= $index ?>" title="Unknown status"></span>
            </div>

            <!-- Dynamically Controlled Link and Button Controls -->
            <div class="url-container">
                <a class="stream-link" id="link-<?= $index ?>" href="<?= htmlspecialchars($primaryStream['url']) ?>" target="_blank" title="<?= htmlspecialchars($primaryStream['url']) ?>">
                    <?= htmlspecialchars($primaryStream['url']) ?>
                </a>
                <button class="copy-url-btn" id="copy-btn-<?= $index ?>" onclick="copySelectedStreamText(<?= $index ?>)" title="Copy URL address">📋</button>
            </div>

            <audio id="player-<?= $index ?>" controls preload="none" onplay="startPlayback(<?= $index ?>)" onpause="stopPlayback(<?= $index ?>)" onended="stopPlayback(<?= $index ?>)">
                <source id="source-<?= $index ?>" src="<?= htmlspecialchars($primaryStream['url']) ?>" type="<?= htmlspecialchars($primaryStream['mime']) ?>">
            </audio>

            <!-- Custom Variant Selector - Only rendered if count > 1 and positioned under player -->
            <?php if ($streamCount > 1): ?>
                <div class="selector-container">
                    <select class="stream-selector" id="select-<?= $index ?>" onchange="switchStreamVariant(<?= $index ?>)">
                        <?php foreach ($station['streams'] as $stIdx => $streamItem): ?>
                            <option value="<?= $stIdx ?>" data-url="<?= htmlspecialchars($streamItem['url']) ?>" data-mime="<?= htmlspecialchars($streamItem['mime']) ?>" data-variant-name="<?= htmlspecialchars($streamItem['name'], ENT_QUOTES) ?>">
                                <?= htmlspecialchars($streamItem['name']) ?> (<?= htmlspecialchars($streamItem['mime']) ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <?php else: ?>
                <!-- Hidden fallback element for index matching layout logic -->
                <select id="select-<?= $index ?>" style="display:none;">
                    <option value="0" data-url="<?= htmlspecialchars($primaryStream['url']) ?>" data-mime="<?= htmlspecialchars($primaryStream['mime']) ?>" data-variant-name="<?= htmlspecialchars($primaryStream['name'], ENT_QUOTES) ?>"></option>
                </select>
            <?php endif; ?>

            <div class="actions-group">
                <button class="icon-btn" onclick="openStreamWindow(<?= $index ?>)" title="Open this stream in a new window">👁️ Otevřít</button>
                <button class="icon-btn" onclick="checkSelectedStream(<?= $index ?>)" title="Test stream availability">⚡ Test</button>
                <button class="icon-btn" onclick="openSelectedRecordingModal(<?= $index ?>)" title="Stream recording options">📥 Record</button>
                <button class="icon-btn" onclick="exportSelectedSingleM3u(<?= $index ?>)" title="Export this stream variant to .m3u">📄 .m3u</button>
                <button class="icon-btn" onclick="shareSelectedStream(<?= $index ?>)" title="Share stream / Open externally">🔗 Share</button>
                <button class="icon-btn" id="bookmark-btn-<?= $index ?>" onclick="handleBookmarkAction(<?= $index ?>)" title="Bookmark Stream" draggable="true">🔖 Bookmark</button>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="footer">
        <a href="?action=export_m3u" class="btn-export main-m3u">Export All to .M3U</a>
        <a href="?action=export_csv" class="btn-export">Export to .CSV</a>
        <a href="?action=export_json" class="btn-export">Export to .JSON</a>
        <a href="?action=export_xml" class="btn-export">Export to .XML</a>
    </div>
</div>

<!-- Recording Modal Container -->
<div class="modal-overlay" id="recordingModal" onclick="closeRecordingModal(event)">
    <div class="modal-content" onclick="event.stopPropagation()">
        <button class="modal-close" onclick="document.getElementById('recordingModal').style.display='none'">×</button>
        <div class="modal-header" id="modalRadioName">Stream Recording</div>
        <p style="font-size:0.8rem; color:#a0a0a0; margin-bottom:15px;">Copy the command and run it in your terminal:</p>

        <div class="cmd-section">
            <div class="cmd-label">FFmpeg - Original Quality (Stream Copy)</div>
            <div class="code-box"><button class="copy-btn" onclick="copyCode(this)">Copy</button><code id="cmdFfmpegRaw"></code></div>
        </div>
        <div class="cmd-section">
            <div class="cmd-label">FFmpeg - Compressed (MP3 64k CBR)</div>
            <div class="code-box"><button class="copy-btn" onclick="copyCode(this)">Copy</button><code id="cmdFfmpegCompress"></code></div>
        </div>
        <div class="cmd-section">
            <div class="cmd-label">VLC Player - Save to File</div>
            <div class="code-box"><button class="copy-btn" onclick="copyCode(this)">Copy</button><code id="cmdVlc"></code></div>
        </div>
        <div class="cmd-section">
            <div class="cmd-label">MPlayer - Dump Stream</div>
            <div class="code-box"><button class="copy-btn" onclick="copyCode(this)">Copy</button><code id="cmdMplayer"></code></div>
        </div>
    </div>
</div>

<script>
const activeIntervals = {};
const originalTitle = "Radio Stream Manager";
const baseUrl = '<?= $baseUrl ?>';

function getSelectedStreamData(index) {
    const selector = document.getElementById(`select-${index}`);
    const selectedOption = selector.options[selector.selectedIndex];
    const stationName = document.getElementById(`station-title-${index}`).innerText;
    const variantName = selectedOption.getAttribute('data-variant-name');

    return {
        stationName: stationName,
        fullName: variantName ? `${stationName} (${variantName})` : stationName,
        url: selectedOption.getAttribute('data-url'),
        mime: selectedOption.getAttribute('data-mime')
    };
}

function switchStreamVariant(index) {
    const data = getSelectedStreamData(index);
    const player = document.getElementById(`player-${index}`);
    const source = document.getElementById(`source-${index}`);
    const link = document.getElementById(`link-${index}`);
    const dot = document.getElementById(`status-${index}`);

    dot.className = 'status-dot';
    const isCurrentlyPlaying = !player.paused;
    player.pause();

    source.setAttribute('src', data.url);
    source.setAttribute('type', data.mime);
    player.load();

    link.setAttribute('href', data.url);
    link.setAttribute('title', data.url);
    link.innerText = data.url;

    if (isCurrentlyPlaying) {
        player.play().catch(err => console.log("Engine initialization pause catch: ", err));
    }
}

function startPlayback(index) {
    const data = getSelectedStreamData(index);
    document.querySelectorAll('audio').forEach((audio, i) => { if (i !== index && !audio.paused) audio.pause(); });
    document.title = `▶ Playing ${data.fullName}`;

    const container = document.getElementById(`eq-${index}`);
    container.classList.add('playing');
    const bars = container.querySelectorAll('.eq-bar');
    if (activeIntervals[index]) clearInterval(activeIntervals[index]);
    activeIntervals[index] = setInterval(() => {
        bars.forEach(bar => { bar.style.height = `${Math.floor(Math.random() * 11) + 3}px`; });
    }, 100);
}

function stopPlayback(index) {
    document.title = originalTitle;
    const container = document.getElementById(`eq-${index}`);
    if (!container) return;
    container.classList.remove('playing');
    if (activeIntervals[index]) { clearInterval(activeIntervals[index]); delete activeIntervals[index]; }
    container.querySelectorAll('.eq-bar').forEach(bar => { bar.style.height = '3px'; });
}

function copySelectedStreamText(index) {
    const data = getSelectedStreamData(index);
    const button = document.getElementById(`copy-btn-${index}`);
    navigator.clipboard.writeText(data.url).then(() => {
        const original = button.innerText;
        button.innerText = '✓';
        setTimeout(() => { button.innerText = original; }, 1500);
    });
}

function openStreamWindow(index) {
    const data = getSelectedStreamData(index);
    const singleCsv = `name,url\n"${data.fullName.replace(/"/g, '""')}","${data.url.replace(/"/g, '""')}"`;
    const finalTargetUrl = `${baseUrl}?url=${encodeURIComponent(singleCsv)}`;
    window.open(finalTargetUrl, '_blank');
}

async function checkSelectedStream(index) {
    const data = getSelectedStreamData(index);
    const dot = document.getElementById(`status-${index}`);
    dot.className = 'status-dot status-checking';
    try {
        const response = await fetch(`?action=check_url&url=${encodeURIComponent(data.url)}`);
        const result = await response.json();
        dot.className = `status-dot status-${result.status}`;
    } catch (error) {
        dot.className = 'status-dot status-offline';
    }
}

function openSelectedRecordingModal(index) {
    const data = getSelectedStreamData(index);
    const safeFilename = data.fullName.toLowerCase().replace(/[^a-z0-9]/g, '_') + '_output.mp3';

    document.getElementById('modalRadioName').innerText = `Recording: ${data.fullName}`;
    document.getElementById('cmdFfmpegRaw').innerText = `ffmpeg -i "${data.url}" -c copy "${safeFilename}"`;
    document.getElementById('cmdFfmpegCompress').innerText = `ffmpeg -i "${data.url}" -c:a libmp3lame -b:a 64k "${safeFilename}"`;
    document.getElementById('cmdVlc').innerText = `cvlc "${data.url}" --sout "#duplicate{dst=std{access=file,mux=raw,dst='${safeFilename}'}}"`;
    document.getElementById('cmdMplayer').innerText = `mplayer -playlist "${data.url}" -dumpstream -dumpfile "${safeFilename}"`;
    document.getElementById('recordingModal').style.display = 'flex';
}

function exportSelectedSingleM3u(index) {
    const data = getSelectedStreamData(index);
    window.location.href = `?action=export_single_m3u&name=${encodeURIComponent(data.fullName)}&url=${encodeURIComponent(data.url)}`;
}

function shareSelectedStream(index) {
    const data = getSelectedStreamData(index);
    if (navigator.share) {
        navigator.share({
            title: data.fullName,
            text: `Listen to ${data.fullName} stream`,
            url: data.url
        }).catch(err => console.log('Error sharing:', err));
    } else {
        navigator.clipboard.writeText(data.url);
        alert(`Native sharing is not supported by your browser.\nURL for "${data.fullName}" has been copied to your clipboard.`);
    }
}

function handleBookmarkAction(index) {
    const data = getSelectedStreamData(index);
    alert(`Drag and drop this station's bookmark button onto your bar. It will remember the active stream variant targeting: ${data.url}`);
}

function closeRecordingModal(event) {
    if(event.target.id === 'recordingModal') document.getElementById('recordingModal').style.display = 'none';
}

function copyCode(button) {
    navigator.clipboard.writeText(button.nextElementSibling.innerText).then(() => {
        const originalText = button.innerText;
        button.innerText = 'Copied!';
        button.style.background = '#4caf50';
        button.style.color = '#ffffff';
        setTimeout(() => { button.innerText = originalText; button.style.background = '#2d2d2d'; button.style.color = '#cccccc'; }, 2000);
    });
}
</script>
</body>
</html>
