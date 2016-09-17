
Drupal 7.x Book Export
======================

I really need something that works for Book nodes so this is it.

* It usesd Node export to import nodes, so that node backups exported by Node export can mostly be imported by this module correctly.
* It re-creates book hierarchies correctly.


Bugs and TODO
-------------

* Support import formats other than JSON.
* Newly-added children not included in the import will become dangling after import.
* Remove global variables.
