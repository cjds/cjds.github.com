---
title: "Creating a Simple Android Game"
layout: post
---

Recently, I have started programming in Android again after nearly a 3 year break. I thought I would start by creating a simple game and making it into a tutorial. Instead of delving into the logic of any particular game I'm just giving the outline code of what it takes to make a game.


##1. The basics behind making a game

Android consists of pages called Acitvities. An Activity represents one user interface and one significant portion of logic. For example, a simple game can be into 3 major activities

1. The opening Activity consisting of the logo and maybe a play button and settings
2. The game itself
3. The end-game activity consisting of a replay button and score


All of these activities will contain components called Views inside. Views can be anything from a textbox to a button. A group of views make up an activity.

For the opening and end-game activity we will use some of these simple views like Buttons and Images.

For the actual game activity however we're going to need to create our own custom view (for most games at least).
This custom view will act like a blank Canvas. We keep drawing the entire game layout on the Canvas and refreshing at the appropriate moments.

Before we start on the opening or end-game activities lets focus on the game activity and custom view.

##2. Building the Game Activity and Custom View
Assuming you have android up and running create a new Android project in Eclipse

###2.0 Create a New Android Project

Click File > New Android Application Project

> %image%
> ![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/new project.png)


Click Next and then Finish.
You should have a basic android project up and running.


Now we have to build our game Activity will come in 3 components

1. Building the Custom View
2. Building the XML for the Activity
2. Building the Activity itself



###2.1Building the Custom View

Building a Custom view is done by simply extending the `View` class in android. The `View` class contains one method that must be specified called `onDraw(Canvas c)`. When this method is called the view will be drawn on the Canvas. (The canvas is an empty element that covers the area specified in your XML).

Games, however continually update their Canvas. This will be controlled by a method called `invalidate`. When `invalidate` is run on the view, the `onDraw` method is rerun. Thus if we keep calling `invalidate` according to a Frame Rate we can create a game that runs as fast as that fram rate.

(this code will however be done in the activity. I specified the theory here.)

So now lets go about building our View. 

We'll start by creating a class called GameBoard which extends the view class. Then create a constructor and override the views `onDraw` method. 

    class GameBoard extends View{
        public GameBoard(Context context, AttributeSet aSet) {
            super(context, aSet);
        }


        @Override
        public void onDraw(Canvas canvas){

        }
    }

The `onDraw` method will be the key to drawing here. We will draw on the canvas passed to the method and that will be seen on the screen. 

    boolean init=false;
    int time =0;
    @Override
    public void onDraw(Canvas canvas){
            if(!init){
                init=true;
            }
            else{
                drawBackground(canvas);
                boolean bringForward=false;
                time++;
                addTextAnimation(canvas);
            }

    }
###2.2Building the XML for the Activity

Well for the game activity we'll create our own `activity.xml`

This basically will contain any layout (I've used a LinearLayout but it doesn't matter as the View takes up the whole screen) and a XML element of our custom view (inside the package you require). You see we've put a drawable background on the view.


	<LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
    	android:layout_width="fill_parent"
    	android:layout_height="fill_parent"
    	android:orientation="vertical" >
    
    <com.cjds.GameBoard
                android:layout_width="fill_parent"
                android:layout_height="fill_parent"
                android:background="@drawable/back"
                android:id="@+id/the_canvas"/>
	</LinearLayout>


###2.3 Building the Activity Itself

To build the Activity we make a use of a `Handler`. `Handler` is basically an extension of the `Thread` class which can call a bit of code after some milliseconds (in the `postDelayed` method). We use this class to call the views `onDraw` method repeatedly.

To handle clicks we use an `onTouchListener` that we create using an anonymous class. You can override any `MotionEvent` and pass it to the appropriate method in the view. We built the `handleClick` method for that very purpose.

    public class Dactyl extends Activity{

        public Handler frame = new Handler();
        private static final int FRAME_RATE = 40; //25 frames per second
        private GameBoard canvas;

        @Override
        public void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_dactyl);
            
            sharedPref = this.getSharedPreferences("settings",Context.MODE_PRIVATE);
            Handler h = new Handler();
            canvas=(GameBoard)findViewById(R.id.the_canvas);

                    canvas.setOnTouchListener(new OnTouchListener(){
            @Override
            public boolean onTouch(View v, MotionEvent me) {
                if(running){
                    switch(me.getActionMasked()){
                        case MotionEvent.ACTION_DOWN:
                        case MotionEvent.ACTION_POINTER_DOWN: 
                            ((GameBoard)v).handleClick(me.getX(),me.getY());
                            return true;
                    }
                }       
                return false;
            }
            
        });

            
            h.postDelayed(new Runnable() {
                @Override
                public void run() {
                        initGfx();
                }
            }, 1000);
        }

        synchronized public void initGfx() {
                frame.removeCallbacks(frameUpdate);
                frame.postDelayed(frameUpdate, FRAME_RATE);
        }
            
            
            
        public Runnable frameUpdate = new Runnable() {
            @Override
            synchronized public void run() {
                running=true;
                frame.removeCallbacks(frameUpdate);
                //make Updates here
                //then invoke the onDraw by invalidating the canvas
                canvas.invalidate();
                frame.postDelayed(frameUpdate, FRAME_RATE);
            }
        };
            
            
        public void end(){
            Intent i= new Intent(context,EndGame.class);
            i.putExtra("score", score);
            startActivity(i);  
        }
            
            
        @Override
        public void finish(){
            frame.removeCallbacks(frameUpdate);
            super.finish();
        }       
    }
