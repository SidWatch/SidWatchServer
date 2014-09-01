SidWatchServer
==============

PHP SidWatch Server
--------------
PHP Based SID Data Collection Platform

### Objectives
Develope a cross platform data collection platform that enables the collection 
of SID readings from multiple sites located around the world.

###Architecture
The client data collection applications (https://github.com/SidWatch/pySIDWatch) are configured to collect data via equipment that was designed as part of the http://solar-center.stanford.edu/SID/ project.  The hardware is available from http://www.radio-astronomy.org/getting-started.  

The existing software available only collects the signal magnitudes of configured stations.  This modification is designed to capture raw signal data from the sound card and store it and transmit it to the servers.  

Three streams of data are going to be collected.
* Station Signal Magnitude Data - This will exactly match the data that is collected by the currently available software.
* Frequency Spectrum Chart - This chart is currently visible in the user interface for the SuperSid software, however the data in it is not stored for future use.
* Raw data from Sound Card - This will be the recorded output from the antenna.  The configuration defaults to 1 second of audio recorded every 5 seconds.
 
The data will be stored in a HDF5 file (http://www.hdfgroup.org/HDF5/).  These files will be configured by default to hold 5 minutes of data.  

A second client thread or process will then upload the files to the servers.  The data will be stored in a Amazon AWS S3 bucket until it has been processed.  

A server process will look for files in the S3 bucket.  When a new file is found it will then import the first two types of data into a MySql database.  The raw data will be available for download in the original HDF5 file format.  HDF5 viewers are available (http://www.hdfgroup.org/downloads/index.html)

Data will also be available to send to Stanford's (http://sid.stanford.edu/database-browser/) existing repository so that the data is not locked into only this system.  It is hoped that improved charting and display capabilities are able to be integrated into this solution to allow users to graph data from various monitoring sites on the same graph.

