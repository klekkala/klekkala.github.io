---
title: "What can we learn from misclassified ImageNet images?"
author_profile: false
collection: publications
permalink: /publication/multitask_metalearn
excerpt: ''
date: 2020-06-01
venue: ''
excerpt: 'Understanding the patterns of misclassified ImageNet images is particularly important, as it could guide us to design deep neural networks (DNN) that generalize better. However, the richness of ImageNet imposes difficulties for researchers to visually find any useful patterns of misclassification. Here, to help find these patterns, we propose "Superclassing ImageNet dataset". It is a subset of ImageNet which consists of 10 superclasses, each containing 7-116 related subclasses (e.g., 52 bird types, 116 dog types). By training neural networks on this dataset, we found that: (i) Misclassifications are rarely across superclasses, but mainly among subclasses within a superclass. (ii) Ensemble networks trained each only on subclasses of a given superclass perform better than the same network trained on all subclasses of all superclasses. Hence, we propose a two-stage Super-Sub framework, and demonstrate that: (i) The framework improves overall classification performance by 3.3%, by first inferring a superclass using a generalist superclass-level network, and then using a specialized network for final subclass-level classification. (ii) Although the total parameter storage cost increases to a factor N + 1 for N superclasses compared to using a single network, with finetuning, delta and quantization aware training techniques this can be reduced to 0.2N + 1. Another advantage of this efficient implementation is that the memory cost on the GPU during inference is equivalent to using only one network. The reason is we initiate each subclass-level network through addition of small parameter variations (deltas) to the superclass-level network. (iii) Finally, our framework promises to be more scalable and generalizable than the common alternative of simply scaling up a vanilla network in size, since very large networks often suffer from overfitting and gradient vanishing.'
paperurl: 'https://arxiv.org/pdf/2006.07438.pdf'
---
