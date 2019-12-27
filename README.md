# ilchlayout
Das Layout der Tudorial-Reihe.
Ihr könnt das Layout nach euren wünschen anpassen.

# feature
Das Layout hat durch die bearbeitete config.php eine Startseite (start.php), in dieser start.php könnt ihr die einzellnen Sektionen
ändern, inhaltlich sowie könnt ihr Ilch-Boxen hinzufügen..

```
<?=$this->getBox('1', '2'); ?>
```

der erste Wert (1) spricht das Modul an, der zweite Wert (2) gibt die Box aus die benödigt werden
zb.: das Artikel Modul hat 4 Boxen "archive, keywords , categories und article", um keywords müsste die ausgabe so geschrieben 
werden

<?=$this->getBox('article', 'keywords'); ?>
