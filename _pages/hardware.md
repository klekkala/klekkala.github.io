---
layout: archive
title: "Beobot"
permalink: /hardware/
author_profile: false
---


<div style = "position:absolute; left:140px; top:200px; width: 300px">
	<img src="/images/beobot.gif" alt="Italian Trulli" align="left">
</div>


<div style = "position:absolute; left:140px; top:1000px; width: 300px">
	<img src="/images/robotnav.png" alt="Italian Trulli" align="left">
</div>


<div style = "position:absolute; left:140px; top:1500px; width: 300px">
	<img src="/images/rviz.png" alt="Italian Trulli" align="left">
</div>

We build an hardware apparatus for evaluating Sim2real performance. The apparatus is a a Non-Holonomic, differential-drive based robot (Beobotv3) for the task of visual navigation. Following are the details of all the sensors used in Beobotv3.

1. *Brix with Google Coral EdgeTPU:* The Gigabyte BRIX is a small form-factor desktop PCs, with a memory of 16 GB RAM, 1 TB SSD and powered by Intel Core i7 processor. It runs Ubuntu 20.04 and ROS Noetic and used for all the compute including forward inference of Neural networks and running all the ROS nodes. The control is offloaded to the Raspberry Pi which, along with 2 other Arduino boards forms the control board. The Edge TPU is Google's purpose-built ASIC chip designed to run machine learning (ML) models for edge computing, meaning it is much smaller and consumes far less power compared to the TPUs hosted in Google TPUs. The Edge TPU is capable of 4 trillion operations per second while using 2W. The product is embedded as a mini M.2 card into the Brix and support Debian-based Linux systems on x86-64. The machine learning runtime used to execute models on the Edge TPU is based on TensorFlow Lite. The Edge TPU is only capable of accelerating forward-pass operations, which means it's primarily useful for performing inferences (although it is possible to perform lightweight transfer learning on the Edge TPU). The Edge TPU also only supports 8-bit math, meaning that for a network to be compatible with the Edge TPU, it needs to either be trained using the TensorFlow quantization-aware training technique, or post-training quantization.


2. *Velodyne HDL-32E:* The HDL-32E, built on Velodyne’s ‘558 patent, provides a full 360-degree environmental view to deliver accurate real-time 3D data. The HDL-32E has 32 channels and generates a point cloud of up to 695,000 points per second with a range of up to 100 m and a typical accuracy of ±2 cm. The resulting comprehensive point cloud coverage within a single data stream makes the HDL-32E an indispensable part of any sensor suite. The sensor has a vertical field of view of 40 deg with 30 degrees downward and 10 degrees upwards \footnote{https://velodynelidar.com/products/hdl-32e/}.

![Beobot](/images/robot.PNG)

3. *Hokuyo UTM-30LX:* The UTM-30LX is a compact, lightweight 2D LiDAR sensor used for obstacle detection and localization on autonomous mobile robots (AMR) and automated guided vehicles and carts (AGV, AGC).  Equipped with a USB 2.0 interface, it can obtain measurement data in a 270° field-of-view up to 30 meters with a 25ms scan speed.  With enhanced internal filtering and IP rating, this device is less susceptible to ambient outdoor light. Velodyne and Hokuyo sensors are widely used for SLAM and Navigation applications.

4. *Multi-camera:* Rig with Realsense D455 cameras} Intel Realsense D455 camera is the current state of the camera in the Intel Realsense line-up. Compared to other Intel Realsense cameras, the D455 extends the distance between the depth sensors to 95 mm which improves the depth error to less than 2\% at 4 meters. To improve the RGB image and the correspondence between the depth and RGB images, the RGB sensor includes a global shutter and is matched to the depth FOV. The camera also integrates an IMU to allow applications to refine its depth awareness in any situation where the camera moves. This allows improved environmental awareness for robotics and drones. Each D455 has a vertical FoV of 53 deg and a horizontal FoV of 44 deg.  We build a rig with the cameras equall positioned at 45 degrees.

5. *JY-GPS IMU:* The WTGAHRS2 is a IMU sensor device, which detects acceleration (Accelerometer), angular velocity, angle (Gyroscope), magnetic field (Magnetometer), air pressure (Barometer) as well as GPS data. Depending on the configuration the device enables the user to stream sensor data at multiple baud and sampling rates. Filtering algorithms like Kalman filtering are implemented onboard, which enables accurate pose estimation.