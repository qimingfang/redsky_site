<?php

$content = '
<div class="container-narrow">
<p>
RedSky is a secure, cloud-based system for real time monitoring and control of sensor/actuator networks. It is composed of two separate layers: the device and the cloud.
</p>

<p>
The RedSky devices can be seamlessly integrated into existing systems. They are uniquely identified by a UUID naming system, and plug easily into the RedSky cloud computing layer through device drivers. Each device defines an ordered list of UUIDs authorized to access the device, as well as set of callback functions, which respond to incoming I/O requests. Low level device controllers can be deployed alongside the devices for quick, automated control of the underlying system. Devices are organized into a device hierarchy; virtual devices may be incorporated into this hierarchy for data aggregation purposes.
</p>

<p>
The Redsky cloud is separated into the frontend and backend subsystems. While the frontend  acts as an entry point into the cloud, the backend is reponsible for data replication and storage. The cloud also leverages a name server to deliver routing information to the requester upon authentication. 
</p>

<p>
Applications can be deployed onto the RedSky platform by linking with the cloud interface library. All results to the application\'s device queries will include network and software latency to help the application compute future command and transmission schedules.
</p>

<div class="pageheading">Resources</div>
<p>
White Paper: <a href="redsky.pdf">[PDF]</a>
</p>

<p>
RedSky Presentation: <a href="redsky.pptx">[PPTX]</a>
</p>

</div>';

$title = "Documentation";

include "template.php";
?>
