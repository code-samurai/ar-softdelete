Yii 2 ActiveRecord Soft Delete extension Change Log
===================================================

1.0.2, May 30, 2018
-------------------

- Bug: Fixed `safeDelete()` method does not catch `\Throwable` (klimov-paul)
- Enh #13: Methods `softDelete()` and `restore()` now supports optimistic locking (klimov-paul)
- Enh #15: Methods `softDelete()` and `restore()` now supports transactional operations (tunecino, klimov-paul)


1.0.1, December 8, 2016
-----------------------

- Bug #4: Fixed model attributes changes at 'beforeSoftDelete' and 'beforeRestore' events are not applied (klimov-paul)


1.0.0, December 26, 2015
------------------------

- Initial release.
