<h2>Interconnected Docker Containers Lab</h2>

<h3>What are we looking at? </h3>
<p style="text-align:justify;">This is something I wanted to do for some time now. The repository is comprised of 2 folders, each containing all the files that make this lab tick. </p>
<p>The httpd folder is a PHP-Apache container. It runs our frontend page and makes use of the PDO API to query the database (running in another container) and fetch the data so they can be displayed.</p>
<p>The mydb folder has the Dockerfile to build the database container and an SQL script to populate it.</p>

<h3>Lab Setup</h3>
<p>Visit my <a href="https://hub.docker.com/u/chrisgvn">Docker Hub page</a> to pull the images. I also include the Dockerfiles and the commands I use to run each container.</p>

<h3>Reaching Milestones</h3>
<p>This lab was a blast to build and, as simple as it is, helped me understand a lot of important concepts in container development such as volumes, networks, writing Dockerfiles and deploying.</p>

<h3>Final Result</h3>
<img src="https://raw.githubusercontent.com/ChrisGvn/docker_lab-connected_containers/master/screenshot.png"></img>
