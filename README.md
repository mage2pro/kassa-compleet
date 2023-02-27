This module integrates a Magento 2 based webstore with the **[Kassa Compleet](https://www.ing.nl/zakelijk/betalen/geld-ontvangen/kassa-compleet/index.html)** payment service by ING Bank (the Netherlands). It [supports](https://mage2.pro/t/3248) iDEAL (the Netherlands), Bancontact (Belgium), bank cards, bank transfers, cash on delivery.  
The module is **free** and **open source**.

## Demo videos
1. [Capture an **iDEAL** payment](https://mage2.pro/t/3567).
2. [Capture a **bank transfer** payment](https://mage2.pro/t/3569).

## Screenshots
### 1. The frontend checkout screen
![](https://mage2.pro/uploads/default/original/2X/9/919cbb6c0b4a2b9089c078ab6c67866261c77e04.png)

### 2. The frontend «checkout success» screen for a bank transfer payment
![](https://mage2.pro/uploads/default/original/2X/8/802d1315ca1cff505e783fd7c8225adffc3d9976.png)

### 3. The «Order Information» → «Payment Method» block on the frontend order page for a bank transfer payment
![](https://mage2.pro/uploads/default/original/2X/5/5745bb2f3356fe4cb0316bd5c45ee28d2131f5b1.png)

### 4. The «Order Information» → «Payment Method» block on the frontend order page for an iDEAL payment
![](https://mage2.pro/uploads/default/original/2X/9/9da2b4b3b5dd73c8bf7db7cb4c851ea85a755cbe.png)

### 5. The «Payment Method» block on the backend order page for an iDEAL payment
![](https://mage2.pro/uploads/default/original/2X/4/433214e15bc541fec2a6909e05b0ff10763532d8.png)

### 6. The backend settings
![](https://mage2.pro/uploads/default/original/2X/7/747edcde365f2bde02dd0edacb3bc2c939004176.png)

## How to install
[Hire me in Upwork](https://upwork.com/fl/mage2pro), and I will: 
- install and configure the module properly on your website
- answer your questions
- solve compatiblity problems with third-party checkout, shipping, marketing modules
- implement new features you need 

### 2. Self-installation
```
bin/magento maintenance:enable
rm -f composer.lock
composer clear-cache
composer require mage2pro/kassa-compleet:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f nl_NL en_US <additional locales>
bin/magento maintenance:disable
```

## How to update
```
bin/magento maintenance:enable
composer remove mage2pro/kassa-compleet
rm -f composer.lock
composer clear-cache
composer require mage2pro/kassa-compleet:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f nl_NL en_US <additional locales>
bin/magento maintenance:disable
```