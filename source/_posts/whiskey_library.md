---
title: 'Capstone Project: The Whiskey Library'
date: 2018-08-30
tags:
  - python
  - etl
  - sql
  - ml
comments: false
---

[The Whiskey Library](https://thewhiskeylibrary417816248.wordpress.com/ 'The Whiskey Library'), a whiskey recommendation engine, was my final group project from my Master’s program. Below you’ll find a summary, but if you are interested in reading more about how it was built, visit the [‘Methodology’](https://thewhiskeylibrary417816248.wordpress.com/recommendation-engine/ 'methodology section') section.  If you want to get your whiskey recommendation, then [head straight to the tool!](http://13.57.18.149/ 'recommendation engine')

To build this engine, we started with the Reddit whiskey review data set and then identified pricing and professional review data. From there, we built an ETL job to establish a unified data structure.  After evaluating our options, we created a modification of He et al’s Neural Collaborative Filtering model. He’s technique can be described as a combination of a feed forward neural network model and a generalized matrix factorization model, which we chose to train simultaneously. We modified the feed forward network portion suggested by He et al to include item-level characteristics we had access to.  This included the region and brand of the whiskey.  We also extracted whiskey-level keywords from reviews collected from Reddit reviews using the TextRank algorithm implemented in gensim. The end result is a recommendation engine that takes in up to 5 of your reviews and returns 10 recommendations for your next bottle!
