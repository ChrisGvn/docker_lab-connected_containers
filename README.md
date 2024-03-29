<h2>Interconnected Docker Containers Lab</h2>

<h3>What are we looking at? </h3>
<p style="text-align:justify;">The repository is comprised of 2 folders, each containing all the files that make this lab tick. </p>
<p>The <code>httpd</code> folder is a PHP-Apache container. It runs our frontend page and makes use of the PDO API to query the database (running in a different container) and fetches the data so they can be displayed.</p>
<p>The <code>mydb</code> folder has the Dockerfile to build the database container and an SQL script to populate it.</p>

<h3>Lab Setup</h3>
<p>First we must setup a bridge network. The command we use is: <br><code>docker network create --driver bridge --subnet=172.19.0.0/24 --gateway=172.19.0.1 labnet
</code> </p>
<p>We then pull the containers with the following commands:
  
  <ol>
  <li><code>docker run -d -p 3308:3306 --network labnet chrisgvn/mydb:test</code></li>
  <li><code>docker run -d -p 80:80 --network labnet chrisgvn/httpd:test</code></li>
</ol>  
 </p>
<p>Visit my <a href="https://hub.docker.com/u/chrisgvn">Docker Hub page</a> for more details</p>

<h3>Reaching Milestones</h3>
<p>This lab was a blast to build and as simple as it is, helped me understand a lot of important concepts in container development such as volumes, networks, writing Dockerfiles and deploying.</p>

<h3>Final Result</h3>
<img src="https://raw.githubusercontent.com/ChrisGvn/docker_lab-connected_containers/master/screenshot.png"></img>
