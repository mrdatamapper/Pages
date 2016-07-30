<?php

use Phinx\Migration\AbstractMigration;

class PageImagesRelations extends AbstractMigration
{
    public function up()
    {
        $sql = <<<SQL
CREATE TABLE page_images_relations
(
  CONSTRAINT page_files_relations_pkey PRIMARY KEY (id),
  CONSTRAINT page_files_relations_first_fkey FOREIGN KEY (first)
      REFERENCES pages (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT page_images_relations_second_fkey FOREIGN KEY (second)
      REFERENCES images (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
INHERITS (relations);
SQL;
        $this->execute($sql);

        $sql = "CREATE SEQUENCE uuid_complex_short_tables_101";
        $this->execute($sql);
    }
}
