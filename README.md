# Fixing-Cloudflare-Error-524
This guide will show you how to fix Cloudflare's Error 524 (A timeout occurred)

# EXPLANATION
A 524 error states that Cloudflare was able to make a TCP connection to the origin, but the origin did not reply with a HTTP response before the connection timed out.

Cloudflare will typically wait for a HTTP response from your server for 100 seconds. If no response is sent by your server in that time, Cloudflare will close the connection and serve a 524 error page.

This error is commonly caused by a long-running process on the origin server, such as a PHP application or a database query which the web server must wait on before responding to a request.
