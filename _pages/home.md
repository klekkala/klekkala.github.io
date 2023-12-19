---
layout: archive
title: ""
permalink: /
excerpt: "About me"
author_profile: true
redirect_from: 
  - /home/
  - /home.html
  - /home/
---


I am a Final year Computer Science PhD candidate in [ILab](https://ilab.usc.edu/) at the [University of Southern California](https://usc.edu) working with Prof. [Laurent Itti](http://ilab.usc.edu/itti/). You can find my [Resume](files/kiran_cv.pdf), [CV](files/kiran_cv.pdf), [Research](https://klekkala.github.io/research/) and [Bio](https://klekkala.github.io/bio/).

My PhD thesis is on Transferrable Pretrained models for Visual Navigation that can be deployed on Mobile Robots. Along with this I'm also interested in 3D Generative models that allow us to build effective Simulators from Real-world data.


Along with the above research areas, I'm also interested in engineering pipelines for efficient training and inference for ML models. I'm also a full-stack roboticist and worked on building and deploying models onto hardware platforms. We recently built a large-scale mobile-robot for our experiments. Please visit the [Beobotv3](https://klekkala.github.io/hardware/) project for more details.


During my undergraduate studies, I worked on Autonomous Visual Navigation for Quadcopter as part of my Hons. Project. I implemented state-estimation modules, primarily using sensor fusion for visual-inertial SLAM methods.







## Research

<img  style="margin-top:4em;" align="left" src="../images/carlagstview.png" width="160" height="160"/> 
<td>
    <p style="margin-left:10em;">
    <a href="https://sites.google.com/usc.edu/world-model-sim2real" style="text-decoration:none">
        World model-based Sim2Real Transfer for Robot Visual Navigation  <br>
    </a>
    <strong>Chen Liu*</strong>, Kiran Lekkala*, Laurent Itti <br>
    <a href="https://arxiv.org/abs/2310.18847"> [ARXIV] </a> <em>Accepted to NeurIPS 2023 Robot Learning Workshop; Submitted to International Conference on Robotics and Automation (ICRA) 2024. </em> <br>
    We propose a robust system that integrates a control policy, trained within a simulator, with an internal LSTM-based robustness-enhanced world model and an external visual perception model, facilitating seamless application of the policy in real-world scenarios.</p>
</td>


<img  style="margin-top:2em;" align="left" src="" width="160" height="160"/> 
<td>
    <p style="font-size:200%" style="margin-left:10em;">USC-iLAB 3D dataset<br>
    Kiran Lekkala, HengHui Bao, <strong>Chen Liu</strong>, Laurent Itti <br>
    <em>To be submitted to Winter Conference on Applications of Computer Vision (WACV) 2024 Workshop. </em> <br>
    Dataset consisting of Accurate posestamped RGB Panaromic images and Velodyne pointcloud scans, and collected using the stereo-velodyne rig on top of <a href="https://klekkala.github.io/hardware/"> Beobotv3 </a> within the USC campus. This dataset has wide range utilities including benchmarking NeRFs, 3D Reconstruction, Visual SLAM and also serves as an offline dataset for evaluating pretrained models for Visual Navigation. We also use this dataset for the GenNavGym; A simulator uses Generative Rendering models to evaluate Visual Navigation.</p>
</td>


<img  style="margin-top:1em;" align="left" src="../images/chrome-capture-2023-9-20.gif" width="160" height="160"/> 
<td>
    <p style="font-size:150px" style="margin-left:10em;">Facilitating Diverse Manipulation with Vision-Language Model<br>
    <strong>Chen Liu</strong>, Sumedh Sontakke, Laurent Itti <br>
    We introduce a multi-task robotic system that empowers robots to perform long-horizon manipulation tasks by mimicking a human demonstration video.</p>
</td>
<img  style="margin-top:0em;" align="left" src="../images/mapf.png" width="160" height="160"/> 
<td>
    <p style="font-size:200%" style="margin-left:10em;">Language to Plans for Hierarchical Multi-Agent Path Finding<br>
    <strong>Chen Liu</strong>, Satish Kumar Thittamaranahalli <br>
    We use a Large Language Model (LLM) to convert natural language instructions into high-level constraints for HMAPF problems. (<a href="http://idm-lab.org/bib/abstracts/papers/hplan21.pdf" style="text-decoration:none">Image Source</a>)</p>
</td>

<img  style="margin-top:3em;" align="left" src="../images/scoomatic.png" width="160" height="160"/> 
<td>
  <p style="font-size:200%" style="margin-left:10em;">
    <a href="https://github.com/crellian/Schoomatic" style="text-decoration:none">
        Schoomatic - A Differential-Drive Robot Simulator<br>
    </a>
    I develop a robot simulator built on CARLA and Unreal Engine 4, embracing all intrinsic CARLA features such as NPC traffic, variable weather conditions and global waypoint planning. This involved developing dynamics, collisions and C++ plugins in Unreal
Engine 4, enabling client-server communication via remote procedure call (RPC), and packaging/releasing the
simulator as a Docker image. Additionally, our codebase provides integration with <a href="https://github.com/crellian/schoomatic_visnav" style="text-decoration:none">RLLib</a> and <a href="https://github.com/crellian/Schoomatic-Autopilot" style="text-decoration:none"> ROS </a> environments.</p>
</td>

<img  style="margin-top:1em;" align="left" src="../images/autopilot.png" width="160" height="160"/> 
<td>
  <p style="font-size:200%" style="margin-left:10em;">
    <a href="https://github.com/crellian/Schoomatic-Autopilot" style="text-decoration:none">
        Schoomatic Autopilot<br>
    </a>
    I implement a ROS-based end-to-end robot navigation system including A* global path planning, Gmapping SLAM, LiDAR-based occupancy grid mapping, Timed-Elastic-Band obstacle avoidance, and PD motion control.</p>
</td>

<img  style="margin-top:2em;" align="left" src="../images/multi-tasks.png" width="160" height="160"/> 
<td>
  <p style="font-size:200%" style="margin-left:10em;">
    <a href="../assets/weather.pdf" style="text-decoration:none">
        Deep Learning-based Image Bad Weather Removal<br>
    </a>
    We improve the state-of-the-art transformer-based model, TransWeather, to restore images degraded by different bad weathers. We Implement and compare CBMA, LeFF, Coordinate Attention and Global-Enhanced Transformer to
adapt the model to heavy rain scenarios. Designed cascaded model to improve the restoration performance</p>
</td>

<img  style="margin-top:0em;" align="left" src="../images/Lenna.png" width="160" height="160"/> 
<td>
  <p style="font-size:200%" style="margin-left:10em;">
    <a href="https://github.com/crellian/CVLab" style="text-decoration:none">
        CVLab<br>
    </a>
    I build a computer vision library including features such as: a template Matrix class with reference counting, matrix operations, image filters (linear, nonlinear, morphological, and Gabor), image pyramids, etc.</p>
</td>


## Teaching






I borrowed this website from this amazing [repository](https://github.com/academicpages/academicpages.github.io).