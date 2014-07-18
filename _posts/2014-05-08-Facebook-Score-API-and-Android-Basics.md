---
title: "Facebook Score API and Android"
layout: post
---

This is a simple tutorial about how to connect your android game using the Facebook Score API.

For reference: This is for the Facebook 3.0 SDK. coded in Android 4.4.2

First you have to get the Facebook SDK which is available [here]()

Now in our project we will need a `class` to handle all the data. Lets call this class `FacebookHandler`.

One of the first things to do in Facebook Handler is to create and handle the Facebook Session. 
Once we have a Session we will send and receive Requests to get the appropriate data.


	if(Session.getActiveSession()!=null){
        	s=Session.getActiveSession();
        	executeFB();
    }
    else{
    	List<String> permissions = new ArrayList<String>();
        permissions.add("public_profile");
        permissions.add("email");
        permissions.add("user_games_activity"); 
        
        s=Session.openActiveSession(this, true,permissions,new Session.StatusCallback() {
	        // callback when session changes state
	        @Override
	        public void call(Session session, SessionState state, Exception exception) {
	        	if(session.isOpened()){
	            	executeFB();
	        	}
	        }
        });
    }





	Session s;
	String user_ID;
	public void executeFB(){
		//check if we have the permission to publish_actions
		if(Session.isPublishPermission("publish_actions")){
			Request request2 = Request.newMeRequest(s, new Request.GraphUserCallback() {
	            @Override
	            public void onCompleted(GraphUser user, Response response) {
	                // If the response is successful
	                if (s == Session.getActiveSession()) {
	                    if (user != null) {
	                        user_ID = user.getId();//user id

	            			Bundle param = new Bundle();
	            		  	param.putInt("score", 11000);
	            		  	Request request = new Request(s, user_ID+"/scores", param , HttpMethod.POST);
	          		  	  	request.setCallback(new Request.Callback()
	          		  	  	{
	          		  	      @Override
	          		  	      public void onCompleted(Response response)
	          		  	      {
	          		  	          Log.d("log_tag", "response: " + response.toString());
	          		  	         // dialog.dismiss();
	          		  	      }
	          		  	  });
	          		  	  request.executeAsync();
	                        //profileName = user.getName();//user's profile name
	                        //userNameView.setText(user.getName());
	                    }   
	                }   
	            }   
	        }); 
			
		  	Request.executeBatchAsync(request2);
		}
		else{
			Log.d("fail","fail");
			ArrayList<String> ss=new ArrayList<String>();
			ss.add("publish_actions");
			s.requestNewPublishPermissions(new Session.NewPermissionsRequest((Activity) context, ss));
			Request request = new Request(s, "1438876219696110/scores", new Bundle() , HttpMethod.GET);
			request.setCallback(new Request.Callback()
		  	  {
		  	      @Override
		  	      public void onCompleted(Response response)
		  	      {
		  	          Log.d("scores", "response: " + response.toString());
		  	      }
		  	  });
		  	  request.executeAsync();
		}
	}
