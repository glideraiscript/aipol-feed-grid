<?php
$cb="
================================
           _   _____      _ 
     /\   (_) |  __ \    | |
    /  \   _  | |__) |__ | |
   / /\ \ | | |  ___/ _ \| |
  / ____ \| | | |  | (_) | |
 /_/    \_\_| |_|   \___/|_|
                            
by Clivio Botticelli
================================                            
Welcome! 👋
Thank you for downloading this script!
We’re excited to offer it as donation freeware because we believe in making AI freely accessible to everyone. 🤖✨

Here’s what you can do with this code:
🔧 Modify it to fit your needs
📋 Copy it without limitations
🚀 Use it in any way you like
💡 Share and build upon it however you want
We hope it helps you create amazing projects and inspires innovation. Happy coding! 💻🌟

If you want to support me with a free donation:
https://www.paypal.com/paypalme/cliviobotticelli
https://beacons.ai/clivio

As long as pollinations is free, we will be like bees pollinating the web of freedom.
https://image.pollinations.ai

MIT License

Copyright (c) 2025 pollinations

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the 'Software'), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
";

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

$noerr=0;
$noerr = $_GET['noerr'] ?? '0';

if ($noerr==1){
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
}

?>