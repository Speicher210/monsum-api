# Changelog

All Notable changes to `speicher210/fastbill-api` will be documented in this file.

## [1.5.5] - 2016-07-06

### Added
- Customer phone number for customer notifications.

### Changed
- Use app.monsum.com domain.

## [1.5.4] - 2016-06-13

### Added
- Method to easily get one subscription.
- Added the coupon to the subscription model.
- Added shortcut cu check is coupon is valid or not.

## [1.5.3] - 2016-06-10

### Changed
- Minor [BC BREAK] The Subscription `isRunning` method now returns `false` for `canceled` status. This reverses the change in 1.4.3

## [1.5.2] - 2016-06-01

### Fixed
- Fixed subscription reactivate request data.

## [1.5.1] - 2016-05-24

### Fixed
- Serialization type for `article_code` in Subscription notification model.
- Serialization type for `customer_number` and `customer_ext_uid` in Customer(s) model.

## [1.5.0] - 2016-05-23

### Added
- API function to get the URL for changing the product of a subscription.

### Changed
- [BC BREAK] Handle timezone of Fastbill hard coded value to `Europe/Berlin`.
- Set invalid `\DateTime` values to `NULL`.

## [1.4.4] - 2016-05-03

### Added
- Added SubscriptionReactivatedNotification model.

## [1.4.3] - 2016-05-02

### Added 
- More Subscription statuses.

### Changed
- Minor [BC BREAK] The Subscription `isRunning` method now returns `true` for `canceled` status. 

## [1.4.2] - 2016-04-26

### Added
- Status constants for Subscription and Payment models.
- Added PDF with official documentation for notification API (in german) for February 2016.

## [1.4.1] - 2016-04-14

### Added
- Methods to get only one customer.
- Added method to get the checkout URL for an article instance.

### Changed
- Deprecated `getCheckoutURL` in Article service. Use `getArticleNumberCheckoutURL` or `getArticleCheckoutURL`.

## [1.4.0] - 2016-03-30

### Changed
- [BC BREAK] Moved the `limit` and `offset` from the request data to the `get` requests in services.

## [1.3.0] - 2016-03-29

### Changed
- [BC BREAK] The article number is now required when checking a coupon (Fastbill API change).

## [1.2.0] - 2016-03-21

### Changed
- RequestsData for services now have a default limit of 100.
- Throw exception in the services if the API response contains errors.

### Added
- Added constants and helper methods for models.
- Added account hash to `ApiCredentials`.
- [BC BREAK] Added method `getCredentials` to `TransportInterface`.
- Added method to get the article checkout URL for a customer (Article service).

## [1.1.0] - 2016-02-03

### Fixed
- Fixed handling \DateTime fields deserialization when they are empty strings.

## [1.0.0] - 2016-01-18

### Added
- Initial release.
