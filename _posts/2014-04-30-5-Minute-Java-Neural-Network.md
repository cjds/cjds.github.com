---
title: "Hebbian Learning in Java"
layout: post
---

Hebbian Learning is the simplest form aof a neural network I can describe. It is often described simply as "Neurons that fire together, wire together."
  
 Hebbian learning was proposed by Dr. Donal Hebb in the 1940s. 
 
 >The idea behind Hebb Theory is that neurons that fire often to a stimulis will fire more strongly the next time the stimulus occurs
 This ensures that the neurons learn because of repitition. It is also why we are so good at things we do repeatedly


###So how do we model it in a network
 What we're basically doing is pattern learning. Present a series of inputs to the system. The most common patterns will produce the largest reaction by the system. This is a type of unsupervised learning. We don't tell the computer the right answer. During training we just present input and the computer guesses it during testing. 
 
 ###Program
 Well now we are testing with certain inputs
 We're training with certain patterns and when we test will see of those patterns have higher firing rates.
 
    [ 1 1 0 0 1]
    [ 1 1 0 0 1]
    [ 1 1 1 0 0]
    [ 1 1 0 0 1]
    [ 1 1 0 0 1]
    [ 1 1 1 0 0]
    [ 1 1 1 1 1]
    
 Now you notice in the training data we always see the first two dimensions firing. So hopefully when we test we will see the same.
 Highest scores for things starting with `[1 1]`
    
 We're looking at a single layer network with no hidden layers, i.e. just input and output.

{% raw  %}
	public class neuralnet{
		public static void main(String a[]){
			int training[][] =new int[][]{{1,1,0,0,1},
										  {1,1,0,0,1},
										  {1,1,1,0,0},
										  {1,1,0,0,1},
										  {1,1,0,0,1},
										  {1,1,1,0,0},
										  {1,1,1,1,1}};
			Net net = new Net(5,training);
			net.training();
			net.testing(new int[]{1,1,0,0,0});
			net.testing(new int[]{0,0,1,0,0});
		}
	}
    class Net {

		double n=0.1;
		int training[][] =new int[5][]; 
		Neuron neurons[]=new Neuron[5];
		
		public Net(int noOfNeurons,int trainingdata[][]){
			neurons=new Neuron[noOfNeurons];
			for(int j=0;j<neurons.length;j++){
				neurons[j]=new Neuron();
			}
			training=trainingdata;
		}
		
		public void training(){
			for(int i=0;i<training.length;i++){
				int inputs[]= training[i];
				double output=getNeuralNetOutput(neurons,inputs);	
				//Update all the neurons
				for(int j=0;j<neurons.length;j++){
					neurons[j].updateWeight(output*n*inputs[j]);
				}
			}
		}
		
		public double getNeuralNetOutput(Neuron[] neurons,int inputs[]){
			//get all the outputs and add them together		
			double output=0;
			for(int j=0;j<neurons.length;j++){
				output+=neurons[j].getOutput(inputs[j]);
			}
			return output;
		}
		
		public void testing (int[] inputs){
			System.out.println(getNeuralNetOutput(neurons,inputs));
		}
		
		class Neuron{
			double w;
			
			public Neuron(){
				w=1;
			}
			
			public double getOutput(int x){
				return x*w;
			}
			
			public void updateWeight(double update){
				w+=update;
			}
		}
	}
{% endraw  %}