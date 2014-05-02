---
title: "What is Hadoop"
layout: post
---


Big Data is synonymous with Hadoop. But what is Hadoop? Hadoop is an open source software managed by the Apache Software Foundation.

##Why Hadoop

Here's the problem of traditional DB's. 

>Our SQL databases are a nice concept but my database is now getting enormous. Lets buy an even more powerful computer to handle all of this stuff
>Wait more powerful computers are expensive. But what if I just bought a ton of small computers instead.

Enter Hadoop.

That's what Hadoop is best at. Hadoop actually allows you to store a database across multiple servers. This means :

* Faster querying. As each processor handles its own bit of data and can reply really quickly querying a huge database would be faster.
* Little to No downtime. As there are usually replicas of both the slaves and master, there is no one point of failure.


##Hadoop Distributed File System (HDFS)

The HDFS is a subsystem of Hadoop. It is a distributed file system, i.e. it can be spread across many servers. It is highly fault-tolerant, i.e. it has a lot of copies of the files. It relies on a centralized Master Slave Architecture, i.e. the master computer controls all the other servers. 

##MapReduce

MapReduce basically handles all the distribution of tasks across the database. The framework takes care of scheduling tasks, monitoring them and re-executing any failed tasks. 
According to Apache MapReduce is used to split the input data set into independent chunks that are processed in a completely parallel manner. The Hadoop MapReduce framework sorts the outputs of the maps, which are then input to the reduce tasks. 

##Hadoop Projects

Hadoop has a whole bunch of subprojects under it. These allow you handle and manipulate data in various ways and include:

Hive : Built for those familiar with traditional SQL databases. HiveQL allows you to select from tables in a similar way.

Pig
