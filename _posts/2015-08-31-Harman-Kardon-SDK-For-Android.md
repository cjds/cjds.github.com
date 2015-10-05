---
title: Harman Kardon Android SDK Tutorial
layout: post
categories : [me]
tags: hello 
---

##About this tutorial
> This project is built for Android 4.0 minimum
Prequisites are Android Studio 0.8.6


This tutorial leads you through the creation of a simple app that uses the Harman Kardon Android SDK to play an audio track on your speaker. We show you how to:

* Set up an Android Studio project for your app,
* Play an audio stream on your Omni 10 or Omni 20

---------

##Creating a Project

Open Android Studio and create a **New Project.**

Set the Minimum SDK version to "API level 14: Android 4.0 (Ice Cream Sandwich)".

When you are asked to "Add an activity to Mobile", select **Blank Activity**.

Give the activity the name `Device_List`, the layout the name `device_list`, and the title `Device List`.


![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/screenshot.jpg)

------------

##Updating the Library

In a file explorer (not Android Studio), drag the `HKWirelessHD.jar` files into the `/app/libs` directory in your project's root directory.

----------

##Adding to the Gradle

In Android studio right click on the app pane on the left hand side. Go to Folder> JNI folder. Name the folder jniLibs	click Finish and a new folder will be created.
Copy the `libHKWirelessHD.SO` files into this  folder

Go to the `build.gradle` for the Module app then add following line to the dependencies `compile files('libs/HKWirelessHD.jar')`

Your dependencies should look like this

	dependencies {                                     
    	compile 'com.android.support:support-v4:19.1.0'
    	compile files('libs/HKWirelessHD.jar')         
	}                                                  

------------------
##Creating the Layouts

There are 2 layouts that we need for this project. The first contains a `ListView` for the devices, and buttons to control the playback of the device.
The second is the item layout for the `ListView`. 


First create an Acitivity called `Device_List` and add the following items to the XML

	<?xml version="1.0" encoding="utf-8"?>
	<RelativeLayout xmlns:android="http://schemas.android.com/apk/res/android"
	    android:layout_width="match_parent"
	    android:layout_height="match_parent" >
	    
	    <ListView
	        android:id="@+id/device_list"
	        android:layout_width="match_parent"
	        android:layout_height="wrap_content"
	        android:layout_marginBottom="50dp" >
	    </ListView>
	    <Button
			android:id="@+id/refresh_btn"
			android:layout_width="100dp"
			android:layout_height="50dp"
			android:layout_alignParentBottom="true"
			android:text="Refresh"  />
	    <Button
	        android:id="@+id/play_btn"
	        android:layout_width="100dp"
	        android:layout_height="50dp"
	        android:layout_toRightOf="@id/refresh_btn"
	        android:layout_alignParentBottom="true"
	        android:text="Play"  />
	    <Button
	        android:id="@+id/pause_btn"
	        android:layout_width="100dp"
	        android:layout_height="50dp"
	        android:layout_toRightOf="@id/play_btn"
	        android:layout_alignParentBottom="true"
	        android:text="Pause"  />
	</RelativeLayout>

Then, create a file `device_list_item.xml`. This has a `TextView` and a checkbox to change whether we are playing to that device or not


	<?xml version="1.0" encoding="utf-8"?>    
	<RelativeLayout xmlns:android="http://schemas.android.com/apk/res/android" 
	    android:orientation="horizontal" 
	    android:layout_width="fill_parent"        
	    android:layout_height="50dp"
	    android:id="@+id/device_list_item"> 

	           
	    <TextView android:id="@+id/device_name" 
	        android:layout_width="wrap_content" 
	        android:layout_height="wrap_content"
	        android:layout_marginLeft="5dp"
	        android:layout_marginTop="10dp" 
	        android:textSize="35px" />
	    
	    <CheckBox
	        android:id="@+id/select"
	        android:layout_alignParentRight="true"
	        android:layout_width="40dp"
	        android:layout_height="40dp"
	        android:focusable="false"
	        android:clickable="false"
	        android:focusableInTouchMode="false"
	        android:checked="false" />
	  
	</RelwativeLayout>

-----------

##Creating a Utilities Class

Before we make the activity, we make a Utility class. This Utilities class will use the `HKWirelessHandler` class from the Library we import at the beginning. Create a class called `Util` 

First we will create some signaling integers for sharing information between the Activity and the Service

	public static final int MSG_PCM_PLAY = 2;
	public static final int MSG_PCM_PAUSE = 3;

	public static final String MSG_TYPE_MUSIC = "msg";
	public static final String MSG_URL_MUSIC = "url";

We then create an inner class called `DeviceData`, which will store a list of devices connected to your WiFi

	public class DeviceData {
		public DeviceObj deviceObj;
		public Boolean status;
	}
	
	private List<DeviceData> devices = new ArrayList<DeviceData>();

Now, lets create an instance of `HKWirelessHandler` and an Instance using the [singleton pattern](https://en.wikipedia.org/wiki/Singleton_pattern)

	public  HKWirelessHandler hkwireless = new HKWirelessHandler();
 	private static Util instance = new Util();


	public static Util getInstance() {
		return instance;
	}

Now, create 4 functions for initializing the speaker and getting information about the current devices

	public void initDeviceInfor() {
		synchronized (this) {
			devices.clear();
			if (!hkwireless.isInitialized())return;
			
			for (int i=0; i<hkwireless.getDeviceCount(); i++) {
				DeviceData device = new DeviceData();
				device.deviceObj = hkwireless.getDeviceInfoByIndex(i);
				device.status = hkwireless.isDeviceActive(device.deviceObj.deviceId);
				devices.add(device);
			}
 		}
	}

	public void refreshDeviceInfoOnce(){
		hkwireless.refreshDeviceInfoOnce();
	}

	public List<DeviceData> getDevices() {
		return devices;
	}

	public boolean getDeviceStatus(int position) {
		return devices.get(position).status;
	}

Now, we need to add methods update the device status and add or remove devices

    public void updateDeviceStatus(long deviceid){
        for (int i=0; i<devices.size(); i++) {
            DeviceData device = devices.get(i);
            if (device.deviceObj.deviceId == deviceid) {
                device.deviceObj = hkwireless.findDeviceFromList(deviceid);
                if (device.deviceObj == null) {
                    devices.remove(i);
                } else {
                    device.status = hkwireless.isDeviceActive(device.deviceObj.deviceId);
                    devices.set(i, device);
                }
                break;
            }
        }
    }

	public boolean removeDeviceFromSession(long deviceid){
		boolean ret = hkwireless.removeDeviceFromSession(deviceid);
		if (ret) {
			updateDeviceStatus(deviceid);
		}
        return ret;
    }
	
	public boolean addDeviceToSession(long deviceid){
        boolean ret = hkwireless.addDeviceToSession(deviceid);
        if (ret) {
            updateDeviceStatus(deviceid);
        }
        return ret;
    }


--------------
##Create The Activity

Now we add to the activity which connects the Utilities class to the front  end. Go to `Device_List.java` which was created earlier.

First we need some constants. One a URL for the song we are going to play, the second which is the Key to Activate the Key and a copy of the Utilities class

	String url="/storage/emulated/0/Music/Bowling for Soup/1985.mp3";

	private static final String KEY = "2FA8-2FD6-C27D-47E8-A256-D011-3751-2BD6";

	private Util util= Util.getInstance();

Now, we setup an inner class for an Adapter. This will allow us to create the custom `ListView` we need.

	class DeviceAdapter extends BaseAdapter {
		private LayoutInflater mInflater;

		public DeviceAdapter(Context context){
			this.mInflater=LayoutInflater.from(context);
		}

		public int getCount() {
			return util.getDevices().size();
		}

		public Object getItem(int position) {
			return util.getDevices().get(position);
		}

		public long getItemId(int position) {
			return position;
		}

		public View getView(final int position, View convertView, ViewGroup parent) {
			convertView = mInflater.inflate(R.layout.device_list_item, null);
			final TextView textView = (TextView)convertView.findViewById(R.id.device_name);
			final CheckBox checkbox = (CheckBox)convertView.findViewById(R.id.select);


			textView.setText(util.getDevices().get(position).deviceObj.deviceName);
			if (util.getDeviceStatus(position)) {
				checkbox.setChecked(true);
			} else {
				checkbox.setChecked(false);
			}

			convertView.setOnClickListener(new View.OnClickListener() {
				@Override
				public void onClick(View arg0) {
					if (util.getDeviceStatus(position)) {
						util.removeDeviceFromSession(util.getDevices().get(position).deviceObj.deviceId);
						checkbox.setChecked(false);
					} else {
						util.addDeviceToSession(util.getDevices().get(position).deviceObj.deviceId);
						checkbox.setChecked(true);
					}
				}
			});
			return convertView;
		}
	}

Next we override the `onCreate`, we initialize the HK Wireless and then overriding the `onClick` for the buttons we created earlier

	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.devicelist);

		/**Registering overriding methods for the Wireless Controller**/
		 * Over here you can override the methods to let your app react to
		 * events tht happen on the speaker
		 **/
		util.hkwireless.registerHKWirelessControllerListener(new HKWirelessListener() {

			@Override
			public void onPlayEnded() {}

			@Override
			public void onPlaybackStateChanged(int arg0) {}

			@Override
			public void onPlaybackTimeChanged(int arg0) {}

			@Override
			public void onVolumeLevelChanged(long deviceId, int deviceVolume,int avgVolume) {}

			@Override
			public void onDeviceStateUpdated(long deviceId, int reason) {}

			@Override
			public void onErrorOccurred(int errorCode, String errorMsg) {
				Toast.makeText(MainActivity.this, errorMsg, Toast.LENGTH_LONG).show();
			}
		});

		/**Initializing the HK Controller **/
		if (!util.hkwireless.isInitialized()) {
			util.hkwireless.initializeHKWirelessController(KEY);
			if (util.hkwireless.isInitialized()) {
				Toast.makeText(this, "Wireless controller init success", Toast.LENGTH_LONG).show();
			} else {
				Toast.makeText(this, "Wireless controller init fail", Toast.LENGTH_LONG).show();
			}
		}
		/**This call will add the speakers connected to your WiFi **/
		util.initDeviceInfor();

		/*The listView for the list of devices on display*/
		ListView deviceList = (ListView)(this.findViewById(R.id.device_list));
		/*DeviceAdapter for the ListView of devices*/
		DeviceAdapter adapter = new DeviceAdapter(this);
		deviceList.setAdapter(adapter);

		//On Click for the REFRESH button
		(this.findViewById(R.id.refresh_btn)).setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				util.refreshDeviceInfoOnce();
			}
		});

		//On click for the PLAY button
		(this).findViewById(R.id.play_btn).setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View view) {
				playMusic();
			}
		});

		//on click pause button
		(this.findViewById(R.id.pause_btn)).setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View view) {
				pauseMusic();
			}
		});

	}

Now, we have to write the methods for playing and pausing music which we mentioned in the `onCreate`

	private void pauseMusic(){
		//start the service to run the Audio Codec
		//we add a message to pause the song
		Intent intent = new Intent();
		intent.putExtra(Util.MSG_URL_MUSIC, url);
		intent.putExtra(Util.MSG_TYPE_MUSIC, Util.MSG_PCM_PAUSE);
		intent.setPackage(MainActivity.this.getPackageName());
		MainActivity.this.startService(intent);
	}

	private void playMusic() {
		if (util.getDevices().size() == 0) {
			Toast.makeText(this, "No device connected", Toast.LENGTH_LONG).show();
			return;
		}
		List<Util.DeviceData> devices = util.getDevices();
		if (devices.size() <= 0){
			Toast.makeText(this, "No device in use", Toast.LENGTH_LONG).show();
			return;
		}

		for (int i=0; i<devices.size(); i++) {
			if (!util.getDeviceStatus(i)) {
				Toast.makeText(this, "No device in use", Toast.LENGTH_LONG).show();
				return;
			}
		}
		//start the service to run the Audio Codec
		//we add a message to play so that can play the song
		Intent intent = new Intent();
		intent.putExtra(Util.MSG_URL_MUSIC, url);
		intent.putExtra(Util.MSG_TYPE_MUSIC, Util.MSG_PCM_PLAY);
		intent.setPackage(this.getPackageName());
		this.startService(intent);
	}

--------

##Creating the Service

This is the last part of the Program. We create a Service that starts up. We have already attempted to start the service in the `pauseMusic()` and `playMusic()` methods. The service is as follows

	private AudioCodecHandler pcmCodec = new AudioCodecHandler();

	@Override
	public IBinder onBind(Intent arg0) {
		return null;
	}

	@Override
	public int onStartCommand(Intent intent, int flags, int startId) {

		if (intent != null) {
			int cmd = intent.getIntExtra(Util.MSG_TYPE_MUSIC, 0);
			if (cmd == Util.MSG_PCM_PLAY) {
				final String url = intent.getStringExtra(Util.MSG_URL_MUSIC);
				String songName =  url.substring(url.lastIndexOf("/"));
				pcmCodec.playCAFFromCertainTime(url, songName, 0);
			} else if (cmd == Util.MSG_PCM_PAUSE) {
				pcmCodec.stop();
			}
		}
		return super.onStartCommand(intent, flags, startId);
	}

--------

##Changing the Manifest
The manifest settings are the last bit of the program that's left. Add these permissions after the activity tag on the Manifest


    <uses-permission android:name="android.permission.MOUNT_UNMOUNT_FILESYSTEMS" />
    <uses-permission android:name="android.permission.READ_EXTERNAL_STORAGE" />
    <uses-permission android:name="android.permission.WRITE_EXTERNAL_STORAGE" />
    <uses-permission android:name="android.permission.WRITE_INTERNAL_STORAGE" />

    <uses-permission android:name="android.permission.INTERNET"/>
    <uses-permission android:name="android.permission.ACCESS_WIFI_STATE"/>
    <uses-permission android:name="android.permission.CHANGE_WIFI_STATE"/>
    <uses-permission android:name="android.permission.CHANGE_WIFI_MULTICAST_STATE"/>
    <uses-permission android:name="android.permission.ACCESS_NETWORK_STATE"/>
    <uses-permission android:name="android.permission.CHANGE_NETWORK_STATE"/>
    <uses-permission android:name="android.permission.WRITE_SETTINGS"/>

    <uses-permission android:name="android.permission.ADD_SYSTEM_SERVICE"/>

Also, we can add the activity to the srvice

    <service
        android:name="com.harman.wirelessomni.MusicPlayerService">
        <intent-filter>
            <action android:name="com.harman.wirelessomni.MainActivity" />
        </intent-filter>
    </service>

------------

##Get the Code

* It should work now. Before running make sure you connect your speaker to the WiFi. Here's a [link](https://www.youtube.com/watch?v=8IdBUwPCYgA) of how to do it


* Link to the [Harman Developer Docs](http://developer.harman.com/site/global/home/p_home.gsp)



* Here's the code on [Github](https://github.com/cjds/wirelessomnitutorial)