# Mage2 Module Ambercreative Brandgraphql

    ``ambercreative/module-brandgraphql``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities


## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Ambercreative`
 - Enable the module by running `php bin/magento module:enable Ambercreative_Brandgraphql`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 
 composer config repositories.magento2-brandgraphql vcs https://github.com/Amber-Creative/magento2-brandgraphql.git

 - Install the module composer by running `composer require ambercreative/module-brandgraphql`
 - enable the module by running `php bin/magento module:enable Ambercreative_Brandgraphql`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - GraphQl Endpoint
	- Product


## Attributes



