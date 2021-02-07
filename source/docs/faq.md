---
title: Frequently Asked Questions (FAQ)
description: A list of questions and issues people often run into
extends: _layouts.documentation
section: content
---


- [Where is the data on the platform coming from?](#data-source)
- [Is the platform going to be updated moving forward?](#future-updates)
- [How often will information on the platform be updated?](#update-frequency)
- [How did you calculate the Disaster Resilience Index?](#calculation-method)
- [How can I use the information on the Disaster Resilience Index?](#how-to-use)
- [How did you determine vulnerable businesses?](#vulnerability-method)
- [Can we get information on particular businesses that are vulnerable within a county?](#vulnerability-info-scope)
- [Can I view information on the platform according to cities within a county?](#municipal-scope)


## Where is the data on the platform coming from? {#data-source}
Our data sources are StatsAmerica, American Community Survey (ACS), County Business Patterns, FEMA, NOAA, and US Economic Development Administration (EDA).

## Is the platform going to be updated moving forward? {#future-updates}
Yes. The platform will be maintained by the engineering team at StatsAmerica.

## How often will information on the platform be updated? {#update-frequency}
The FEMA data is updated daily. The NOAA data is updated monthly. The ACS and County Business Patterns data are updated yearly. And the EDA data is updated as we receive the files.  

## How did you calculate the Disaster Resilience Index? {#calculation-method}
The measures are calculated using data from the Census, American Community Survey, and other large data sources maintained by StatsAmerica. In general, each individual measure is the percentile within the relative range for the individual measure across all counties for a given year. The categories are calculated by averaging all of the requisite individual measures. Overall resilience is the sum of the category values. The methodology used for disaster resilience is based on [Cutter et al. 2010](http://resiliencesystem.com/sites/default/files/Cutter_jhsem.2010.7.1.1732.pdf). 

## How can I use the information on the Disaster Resilience Index? {#how-to-use}
The information can be used to make an assessment of the overall disaster resilience for the county. We have provided visual comparisons for the state and the nation with each individual measure. Resilience is not absolute and it is important to remember that the values presented are relative to other counties.

For example, the measures are not meant to direct action towards influencing the actual data fields that comprise the measure. The measures are meant to be reflective of larger patterns within the community that contribute to the overall resilience. In many cases -- like educational equity, which measures the ratio of persons with more than a high school degree to those with a high school degree -- there are latent factors that contribute to an increase in the measure that a community may consider in order to improve the overall resilience. Some latent factors include the attractiveness of the community to new businesses with higher-paying jobs, availability of social programs that can increase the ability of differently advantaged students to continue with educational pursuits, and even the availability of public transportation.

## How did you determine vulnerable businesses? {#vulnerability-method}
To calculate the BVI, we isolated businesses by NAICS code from the U.S. Census' most recent County Business Patterns based on their vulnerability to a natural disaster (farmers, transportation companies, etc.). Businesses that were identified to be especially vulnerable to a disaster are: dependent on supply chains, have a high reliance on public utilities like water and electricity, or have a large infrastructure footprint and low infrastructure mobility.

## Can we get information on particular businesses that are vulnerable within a county? {#vulnerability-info-scope}
The information on business vulnerability is being presented according to business sectors only. 

## Can I view information on the platform according to cities within a county? {#municipal-scope}
Information on the platform is at the county level. Please visit [www.statsamerica.org](https://www.statsamerica.org) to explore more relevant datasets.

<br/><br/>

_This is being built in tandem with your feedback. If you have any suggestions, please contact 
[ctil@iu.edu](ctil@iu.edu)_