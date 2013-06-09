<?php

$content = '
    <div class="greybackground">
        <div class="inner">
            <div id="bannerText">
                Cloud Technologies for Advanced <a href="#" class="red">Sensor Networks</a>
            </div>
            <div id="banner">
          <img src="connections.png" alt="connected" />
        </div>
        </div>
    </div>

    <div class="inner topSpace">

      <div id="col2" class="col">
        <div class="subTitle">Sensors</div>
        <p>
        Existing and future sensors can exploit RedSky functionality through a cross-platform C++ library. Typically, only a user-mode device driver for the sensor is required to attain full functionality.
        </p>

        <div class="subTitle">Speed</div>
        <p>
        Redundant disjoint network routing guarantees minimum end-to-end latency. High performance software architecture that is built from the ground up to be efficient on all participating sensors and computational devices.
        </p>

        <div class="subTitle">Survivability</div>
        <p>
        3-axis redundancy dramatically improves operability under system duress. Network redundancy ensures no performance is lost during link outages. Storage redundancy provides data resilience and availability. Computational redundancy maintains high-level algorithmic control of system.
        </p>

      </div>

      <div id="col1" class="col">
        <div class="subTitle">Security</div>
        <p>
        Industrial strength AES256 encryption that is used to secure communication channels at all levels. Flexible fine-grained discretionay access control policies can be expressed for maximum system control.</p>

            
        <div class="subTitle">Scalability</div>
        <p>
        Hierarchical structure with data summary eliminates data explosion within core networks. Online system provisioning and dynamic resource management allows network to grow on-demand.
        </p>

        <div class="subTitle">Stability</div>
        <p>
         Separation of critical components and automatic process recovery ensure that the system is robust to common failures. Advanced algorithms for traffic shaping control and redirect load to even out resource utilization.
        </p>
      </div>
    </div>
';

include "template.php";

?>
