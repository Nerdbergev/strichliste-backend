# strichliste-backend  [![Build Status](https://travis-ci.org/strichliste/strichliste-backend.svg?branch=master)](https://travis-ci.org/strichliste/strichliste-backend)

strichliste ([ʃtʀɪçˈlɪstə], German word for tally sheet) is a tool to replace a tally sheet inside a hackerspace. It is the first project developed by the hackerspace bootstrap organization.
It’s aim is to provide a no-frills, easy-to-setup and -to-use solution for managing your organization’s snack bar. 

## Differences to the upstream version

Our fork of the strichliste-backend includes the new barcode and tags features which haven't been merged in the upstream repository as of this writing.
We also added the option to play different sounds when depositing/withdrawing money or doing transactions.

To add new sounds you need to: 
* [add a new sound file to the sounds folder](https://github.com/Nerdbergev/strichliste-web-frontend/blob/master/README.md#differences-to-the-upstream-version).
* Add the file name to the sounds list(s) in the `strichliste.yaml` config file
* Clear the cache by running `php bin/console cache:clear`
* Reload the frontend in your user agent

To debug if the new sound was properly added you can open the network tab in the dev tools and see if the sound file appears in the request history.

## How it works?

The processes implemented by strichliste inherently assumes to be used by a trusted audience. Each user intending to buy something from your kiosk is required to have a user account with strichliste. This can be done by registering your username (no other data is required).

Once an account is available, buying an item is as simple as deducting the equivalent value of the item from your account. Administrators of strichliste can define a lower or upper bound for the users’ credit balance. For example, administrators can configure that it is not allowed to have a negative balance.

Cashing your account works the same as the inverse of buying an item: Simply charge your account with the given amount and it will take effect immediately.

It’s as simple as that!

## Demo

Curious to see how it works? Check out our Demo at https://demo.strichliste.org

## API Documentation

For a full documentation or the strichliste2 API, please see the API.md file.


## Config Documentation

For documentation of the config parameters in `config/services.yml`, please read the Config.md file.


