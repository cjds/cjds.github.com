---
title: Visual Question Generation
layout: post
categories : [image recognition,machine learning]
---


###Motivation
We propose creating a artificial dataset of natural language questions about images. 

###Introduction

There have a been a string of successes in using deep learning for object recognition and image captioning among other tasks.
However, algorithms that truly understand scenes is still unsolved. Our focus is on generating large datasets of questions for images to train on. The idea behind this, is that if an algorithm could ask a series of questions about images that it's seeing, it could potentially one day learn how to answer them.

The sapce for asking questions however, is much

###Related Work

While there have not been attempts to learn the question space from images, there have been attempts at creating a series of questions about bodies of text.

In Computer-Aided Generation of Multiple-Choice Tests, the authors picked the key nouns in the paragraph and and then use a regular expression to generate the question. 
In the image domain, there have been attempts at visual question generation and image understanding. To do this there have been multiple datasets created, though they're overall size is small when comparing to datasets like MSCOCO and ImageNet

Visual Madlibs 

VQA is a dataset that has a series of non-trivial questions about the images that are contained within. They also contain Mulitiple Choice along with Open Ended question
Visual Genome Project is a similar dataset that contains a list of relationships between objects in images, that potentially could benefit large scale scene understanding.


###Algorithm
There are three methods that we are going to discuss. We are using the VQA dataset to create our series of questions. The first is a baseline test of passing a series of Convolution based features to an LSTM and training it to output a bag of words which forms the sentence.

The second method uses the  VQA is a set of question answer pairs against. 

###Network Description
We used the VGG net 16 and Res Net to as a CNN to create image features

<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/network.png' style="margin-top:50px"/>


The work was done in Torch and can be found here


###Results

###References

Mitkov, R., & Ha, L. A. (2003, May). Computer-aided generation of multiple-choice tests. In Proceedings of the HLT-NAACL 03 workshop on Building educational applications using natural language processing-Volume 2 (pp. 17-22). Association for Computational Linguistics.

Aldabe, Itziar, et al. "Arikiturri: an automatic question generator based on corpora and nlp techniques." Intelligent Tutoring Systems. Springer Berlin Heidelberg, 2006.

Visual Genome: Connecting Language and Vision Using Crowdsourced Dense Image Annotations
Ranjay Krishna, Yuke Zhu, Oliver Groth, Justin Johnson, Kenji Hata, Joshua Kravitz, Stephanie Chen, Yannis Kalantidis, Li Jia-Li, David Ayman Shamma, Michael Bernstein, Li Fei-Fei

