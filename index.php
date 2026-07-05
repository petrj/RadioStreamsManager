<?php
// Default stream list
$default_streams = [
    ['name' => 'Radio Plus', 'url' => 'http://amp.cesnet.cz:8000/cro-plus.ogg', 'mime' => 'audio/ogg'],
    ['name' => 'Radio Beat', 'url' => 'https://stream.rcs.revma.com/3d47nqvb938uv', 'mime' => 'audio/mpeg'],    
    ['name' => 'Rock Rádio', 'url' => 'http://ice.abradio.cz/sumava128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'Rádio Impuls', 'url' => 'http://icecast1.play.cz/impuls128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'Frekvence 1', 'url' => 'https://ice.actve.net/fm-frekvence1-128', 'mime' => 'audio/mpeg'],
    ['name' => 'Bonton', 'url' => 'https://ice.actve.net/fm-bonton-320', 'mime' => 'audio/mpeg'],                        
    ['name' => 'Evropa 2', 'url' => 'https://ice.actve.net/fm-evropa2-128', 'mime' => 'audio/mpeg'],
    ['name' => 'Čas Rock', 'url' => 'https://icecast7.play.cz/casrock128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'Radio Čas', 'url' => 'https://icecast6.play.cz/casradio128.mp3', 'mime' => 'audio/mpeg'],    
    ['name' => 'Rozk Zone', 'url' => 'https://icecast5.play.cz/rockzone128.mp3', 'mime' => 'audio/mpeg'],    
    ['name' => 'Color Music Radio', 'url' => 'https://icecast6.play.cz/color192.mp3', 'mime' => 'audio/mpeg'],    
    ['name' => 'Radio 1', 'url' => 'https://live.radio1.pf:8443/radio1', 'mime' => 'audio/mpeg'],            
    ['name' => 'Blaník', 'url' => 'http://ice.abradio.cz/blanikfm128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'Humor', 'url' => 'http://mp3stream4.abradio.cz/humor128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'Oldies', 'url' => 'https://ice.radia.cz/oldiesradio128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'Hey Radio', 'url' => 'https://icecast3.play.cz/hey-radio128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'ZUN', 'url' => 'https://icecast9.play.cz/zun192.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'Radio Relax', 'url' => 'https://icecast7.play.cz/relax128.mp3', 'mime' => 'audio/mpeg'],                                                            
    ['name' => 'Rádio Regina BB', 'url' => 'http://live.slovakradio.sk:8000/Regina_BB_128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'ČRo 1 - Radiožurnál', 'url' => 'http://icecast8.play.cz:8000/cro1-128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'ČRo 2 - Praha', 'url' => 'http://icecast7.play.cz:8000/cro2-128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'ČRo 3 - Vltava', 'url' => 'http://amp.cesnet.cz:8000/z-cro3.ogg', 'mime' => 'audio/ogg'],    
    ['name' => 'ČRo Radio Wave', 'url' => 'https://rozhlas.stream/wave_mp3_128.mp3', 'mime' => 'audio/mpeg'],
    ['name' => 'ČRo Radio Junior', 'url' => 'http://amp.cesnet.cz:8000/z-cro-radio-junior.ogg', 'mime' => 'audio/ogg'],
    ['name' => 'ČRo Jazz', 'url' => 'http://amp.cesnet.cz:8000/z-cro-jazz.ogg', 'mime' => 'audio/ogg'],
    ['name' => 'ČRo D-dur', 'url' => 'http://amp.cesnet.cz:8000/z-cro-d-dur.ogg', 'mime' => 'audio/ogg'],
    ['name' => 'Radio Prague International', 'url' => 'https://rozhlas.stream/cro7_mp3_128.mp3', 'mime' => 'audio/mpeg'],    
    ['name' => 'Classic Praha', 'url' => 'http://icecast8.play.cz/classic128.mp3', 'mime' => 'audio/mpeg'],    
    ['name' => 'BBW World Service', 'url' => 'http://stream.live.vc.bbcmedia.co.uk/bbc_world_service', 'mime' => 'audio/mpeg']  
    

   
];

// Parse custom streams from URL parameter if present (expecting CSV format: name,url)
$streams = [];
if (!empty($_GET['url'])) {
    $csv_data = $_GET['url'];
    
    // Read the CSV string row by row safely
    $lines = preg_split('/\r\n|\r|\n/', trim($csv_data));
    $has_header = false;
    
    foreach ($lines as $line) {
        $row = str_getcsv($line, ',');
        if (empty($row) || count($row) < 2) {
            continue;
        }
        
        // Skip header row if present
        if (!$has_header && strtolower($row[0]) === 'name' && strtolower($row[1]) === 'url') {
            $has_header = true;
            continue;
        }
        
        $name = trim($row[0]);
        $url = trim($row[1]);
        
        if (!empty($url)) {
            // Simple MIME type detection based on extension
            $mime = 'audio/mpeg';
            if (str_contains(strtolower($url), '.ogg')) {
                $mime = 'audio/ogg';
            } elseif (str_contains(strtolower($url), '.wav')) {
                $mime = 'audio/wav';
            }

            $streams[] = [
                'name' => !empty($name) ? $name : 'Custom Stream',
                'url' => $url,
                'mime' => $mime
            ];
        }
    }
}

// Fallback to defaults if no valid streams were loaded from URL
if (empty($streams)) {
    $streams = $default_streams;
}

// AJAX: Server availability check
if (isset($_GET['action']) && $_GET['action'] === 'check_url' && isset($_GET['url'])) {
    header('Content-Type: application/json');
    $url = $_GET['url'];
    $parts = parse_url($url);
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

// EXPORT: Global M3U Playlist
if (isset($_GET['action']) && $_GET['action'] === 'export_m3u') {
    header('Content-Type: audio/x-mpegurl');
    header('Content-Disposition: attachment; filename="playlist.m3u"');
    echo "#EXTM3U\r\n";
    foreach ($streams as $stream) {
        echo "#EXTINF:-1," . $stream['name'] . "\r\n" . $stream['url'] . "\r\n";
    }
    exit;
}

// EXPORT: Single M3U Stream
if (isset($_GET['action']) && $_GET['action'] === 'export_single_m3u' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if (isset($streams[$id])) {
        $stream = $streams[$id];
        $safeName = strtolower(preg_replace('/[^a-zA-Z0-9]/', '_', $stream['name']));
        header('Content-Type: audio/x-mpegurl');
        header('Content-Disposition: attachment; filename="' . $safeName . '.m3u"');
        echo "#EXTM3U\r\n#EXTINF:-1," . $stream['name'] . "\r\n" . $stream['url'] . "\r\n";
    }
    exit;
}

// EXPORT: Global CSV
if (isset($_GET['action']) && $_GET['action'] === 'export_csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="streams.csv"');
    $output = fopen('php://output', 'w');
    fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF)); // BOM for Excel
    fputcsv($output, ['name', 'url']);
    foreach ($streams as $stream) { fputcsv($output, [$stream['name'], $stream['url']]); }
    fclose($output);
    exit;
}

// EXPORT: Global JSON
if (isset($_GET['action']) && $_GET['action'] === 'export_json') {
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Disposition: attachment; filename="streams.json"');
    echo json_encode($streams, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

// EXPORT: Global XML
if (isset($_GET['action']) && $_GET['action'] === 'export_xml') {
    header('Content-Type: application/xml; charset=utf-8');
    header('Content-Disposition: attachment; filename="streams.xml"');
    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><streams></streams>');
    foreach ($streams as $stream) {
        $item = $xml->addChild('stream');
        $item->addChild('name', htmlspecialchars($stream['name']));
        $item->addChild('url', htmlspecialchars($stream['url']));
        $item->addChild('mime', htmlspecialchars($stream['mime']));
    }
    echo $xml->asXML();
    exit;
}

// Helper to determine base URL for self-referencing links
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
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
            --bg-color: #121212;        /* Flutter Material Dark Theme Baseline Background */
            --card-bg: #1e1e1e;         /* Flutter Material Dark Elevated Surface */
            --text-color: #e3e3e3;      /* High-emphasis text */
            --text-muted: #a0a0a0;      /* Medium-emphasis text */
            --accent-color: #2196f3;    /* Flutter Material Blue Accent */
            --border-radius: 12px;
            --success-color: #4caf50;   /* Flutter Dark Success Green */
            --danger-color: #f44336;    /* Flutter Dark Danger Red */
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
            display: flex; align-items: center; justify-content: space-between; margin-bottom: 6px;
        }

        .stream-title-group {
            display: flex; align-items: center; gap: 10px; width: 100%;
        }

        .stream-name { font-size: 1.2rem; font-weight: 600; margin: 0; color: var(--text-color); }

        /* Miniature Equalizer next to title */
        .equalizer-container {
            display: none; align-items: flex-end; gap: 2px;
            width: 18px; height: 14px; padding-bottom: 1px; flex-shrink: 0;
        }
        .equalizer-container.playing { display: flex; }
        .eq-bar { width: 3px; height: 3px; background-color: var(--accent-color); border-radius: 1px 1px 0 0; }

        /* LED Status Indicator - Moved to the right side of the card header */
        .status-dot { 
            width: 1rem; height: 1rem; border-radius: 50%; 
            background: #333333; display: inline-block; 
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.5);
            border: 1px solid #2d2d2d; flex-shrink: 0;
        }
        .status-online { 
            background: var(--success-color); 
            box-shadow: 0 0 10px var(--success-color), inset 0 1px 2px rgba(255,255,255,0.3); 
        }
        .status-offline { 
            background: var(--danger-color); 
            box-shadow: 0 0 10px var(--danger-color), inset 0 1px 2px rgba(255,255,255,0.3); 
        }
        .status-checking { 
            background: #ffeb3b; 
            box-shadow: 0 0 10px #ffeb3b;
            animation: pulse 1s infinite; 
        }

        @keyframes pulse { 0%, 100% { opacity: 0.4; } 50% { opacity: 1; } }

        /* URL sub-header container */
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
        
        /* Dark mode injection for native audio element */
        audio { width: 100%; border-radius: 8px; filter: invert(0.88) hue-rotate(180deg); } 

        /* Actions container */
        .actions-group { 
            display: flex; gap: 6px; align-items: center; justify-content: flex-end; 
            margin-top: 12px; margin-bottom: 12px; flex-wrap: wrap; 
        }

        .icon-btn {
            background: #2d2d2d; border: none; border-radius: 6px;
            padding: 6px 10px; display: flex; align-items: center; gap: 4px;
            cursor: pointer; color: #cccccc; font-size: 0.8rem; font-weight: 500;
            transition: background 0.2s, color 0.2s;
            text-decoration: none;
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

        /* Modals in Dark Mode */
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
    <?php foreach ($streams as $index => $stream): 
        // Create a single stream CSV block: "name,url\n{stream_name},{stream_url}"
        $single_csv = "name,url\n\"" . str_replace('"', '""', $stream['name']) . "\",\"" . str_replace('"', '""', $stream['url']) . "\"";
        $open_url = $baseUrl . '?url=' . urlencode($single_csv);
    ?>
        <div class="stream-card" id="card-<?= $index ?>">
            <!-- Top Header: Title, Inline Mini Equalizer, and LED on the right -->
            <div class="stream-header">
                <div class="stream-title-group">
                    <h2 class="stream-name"><?= htmlspecialchars($stream['name']) ?></h2>
                    <!-- Mini Inline Equalizer Visualizer -->
                    <div class="equalizer-container" id="eq-<?= $index ?>">
                        <div class="eq-bar"></div>
                        <div class="eq-bar"></div>
                        <div class="eq-bar"></div>
                        <div class="eq-bar"></div>
                    </div>
                </div>
                <span class="status-dot" id="status-<?= $index ?>" title="Unknown status"></span>
            </div>

            <!-- URL Address Row -->
            <div class="url-container">
                <a class="stream-link" href="<?= htmlspecialchars($stream['url']) ?>" target="_blank" title="<?= htmlspecialchars($stream['url']) ?>">
                    <?= htmlspecialchars($stream['url']) ?>
                </a>
                <button class="copy-url-btn" onclick="copyDirectText(this, '<?= htmlspecialchars($stream['url'], ENT_QUOTES) ?>')" title="Copy URL address">📋</button>
            </div>

            <!-- Audio Player Component -->
            <audio controls preload="none" onplay="startPlayback(<?= $index ?>, '<?= htmlspecialchars($stream['name'], ENT_QUOTES) ?>')" onpause="stopPlayback(<?= $index ?>)" onended="stopPlayback(<?= $index ?>)">
                <source src="<?= htmlspecialchars($stream['url']) ?>" type="<?= htmlspecialchars($stream['mime']) ?>">
            </audio>

            <!-- Actions Controls Row -->
            <div class="actions-group">
                <a class="icon-btn" href="<?= $open_url ?>" target="_blank" title="Open this stream in a new window">👁️ Otevřít</a>
                <button class="icon-btn" onclick="checkStream('<?= urlencode($stream['url']) ?>', <?= $index ?>)" title="Test stream availability">⚡ Test</button>
                <button class="icon-btn" onclick="openRecordingModal('<?= htmlspecialchars($stream['name'], ENT_QUOTES) ?>', '<?= htmlspecialchars($stream['url'], ENT_QUOTES) ?>')" title="Stream recording options">📥 Record</button>
                <a class="icon-btn" href="?action=export_single_m3u&id=<?= $index ?>" title="Export this stream to .m3u">📄 .m3u</a>
                <button class="icon-btn" onclick="shareStream('<?= htmlspecialchars($stream['name'], ENT_QUOTES) ?>', '<?= htmlspecialchars($stream['url'], ENT_QUOTES) ?>')" title="Share stream / Open externally">🔗 Share</button>
                <a class="icon-btn" href="<?= htmlspecialchars($stream['url']) ?>" title="Drag and drop onto your Bookmarks Bar" target="_blank" draggable="true" onclick="alert('Drag and drop this button onto your browser\'s Bookmarks Bar to save it.'); return false;">🔖 Bookmark</a>
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

<!-- Recording Modal -->
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

function startPlayback(index, streamName) {
    document.querySelectorAll('audio').forEach((audio, i) => { if (i !== index && !audio.paused) audio.pause(); });
    document.title = `▶ Playing ${streamName}`;
    
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

function copyDirectText(button, text) {
    navigator.clipboard.writeText(text).then(() => {
        const original = button.innerText;
        button.innerText = '✓';
        setTimeout(() => { button.innerText = original; }, 1500);
    });
}

function shareStream(name, url) {
    if (navigator.share) {
        navigator.share({
            title: name,
            text: `Listen to ${name} stream`,
            url: url
        }).catch(err => console.log('Error sharing:', err));
    } else {
        navigator.clipboard.writeText(url);
        alert(`Native sharing is not supported by your browser.\nURL for "${name}" has been copied to your clipboard.`);
    }
}

function openRecordingModal(name, url) {
    const safeFilename = name.toLowerCase().replace(/[^a-z0-9]/g, '_') + '_output.mp3';
    document.getElementById('modalRadioName').innerText = `Recording: ${name}`;
    document.getElementById('cmdFfmpegRaw').innerText = `ffmpeg -i "${url}" -c copy "${safeFilename}"`;
    document.getElementById('cmdFfmpegCompress').innerText = `ffmpeg -i "${url}" -c:a libmp3lame -b:a 64k "${safeFilename}"`;
    document.getElementById('cmdVlc').innerText = `cvlc "${url}" --sout "#duplicate{dst=std{access=file,mux=raw,dst='${safeFilename}'}}"`;
    document.getElementById('cmdMplayer').innerText = `mplayer -playlist "${url}" -dumpstream -dumpfile "${safeFilename}"`;
    document.getElementById('recordingModal').style.display = 'flex';
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

async function checkStream(encodedUrl, index) {
    const dot = document.getElementById(`status-${index}`);
    dot.className = 'status-dot status-checking';
    try {
        const response = await fetch(`?action=check_url&url=${encodedUrl}`);
        const data = await response.json();
        dot.className = `status-dot status-${data.status}`;
    } catch (error) {
        dot.className = 'status-dot status-offline';
    }
}
</script>
</body>
</html>
