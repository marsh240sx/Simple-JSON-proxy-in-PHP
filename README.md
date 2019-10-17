# Simple-JSON-proxy-in-PHP

This can be used to get around a hosting provider that blocks non-standard ports at their firewall or doesn't allow you to start application via shell on standard ports such as 80 or 443.
For example, if you have a python application running port 10060 but aren't able to access that port externally, you can use this index.php to receive JSON POSTs and then it will foward internally on the server to a different port that another application is listening on. 
