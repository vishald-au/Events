<html>
<head>
	<title>Shared Hosting Statistics</title>
<style>
body {
	background-color: black;
	color: green;
	font-weight: bold;
}
pre {
	color: white;
}
a , a:visited {
	color: white;
}
</style>
</head>
<body>
<?php
$break = "</pre><br/><br/>";
echo "The server which this script is running on is: <br/><pre>";
system("hostname");
echo $break;
echo "The current time is: <br/><pre>";
system("/bin/date");
echo $break;
echo "The current load average is: <br/><pre>";
system("cat /proc/loadavg");
echo $break;
echo "The current memory info is: <br/><pre>";
system("cat /proc/meminfo");
echo $break;
echo "The current vmstat is: <br/><pre>";
system("/usr/bin/vmstat");
echo "</pre><br/><br/>
The interesting numbers here are the first ones. This is the number of processes that are in the run queue. This value shows how many processes are ready to be executed, but can not be run at the moment because other processes need to finish. For lightly loaded systems, this is almost never above 1-3, and numbers consistently higher than 10 indicate the machine is getting pounded.<br/><br/>
Other interesting values include the system numbers for in and cs. The in value is the number of interupts per second a system is getting. A system doing a lot of network or disk I/O will have high values here, as interupts are generated every time something is read or written to the disk or network.<br/><br/>
The cs value is the number of context switches per second. A context switch is when the kernel has to take the executable code for a program out of memory, and switch in another. It's actually _way_ more complicated than that, but that's the basic idea. Lots of context swithes are bad, since it takes some fairly large number of cycles to perform a context switch, so if you are doing lots of them, you are spending all your time changing jobs and not actually doing any work. I think we can all understand that concept.<br/>
<a href=\"http://www.linuxtroubleshooting.com/wiki/index.php?title=Main_Page\">From the Troubleshooting Linux Wiki</a><br/><br/>";
?>
</body>
</html>