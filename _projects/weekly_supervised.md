---
title: "Weekly supervised learning"
author_profile: false
collection: projects
permalink: /projects/robust_unet
excerpt: 'Machine learning methods often need a large amount of labeled training data. Since the training data is assumed to be the ground truth, outliers can severely degrade learned representations and performance of trained models. Here we apply concepts from robust statistics to derive a novel variational autoencoder that is robust to outliers in the training data. Variational autoencoders (VAEs) extract a lower-dimensional encoded feature representation from which we can generate new data samples. Robustness of autoencoders to outliers is critical for generating a reliable representation of particular data types in the encoded space when using corrupted training data. Our robust VAE is based on beta-divergence rather than the standard Kullback-Leibler (KL) divergence. Our proposed lower bound lead to a RVAE model that has the same computational complexity as the VAE and contains a single tuning parameter to control the degree of robustness.'
---
