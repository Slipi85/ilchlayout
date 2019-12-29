## ilchlayout
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

```
<?=$this->getBox('article', 'keywords'); ?>
```

# Menü und footer ausgaben
* Die Sidebar ausgabe in der forum.php wird unter Admincenter/Menüs/Menü2 gesteuert,
* Die Sidebar ausgabe in der article.php wird unter Admincenter/Menüs/Menü1 gesteuert,
* Die Navigation ausgabe wird unter Admincenter/Menüs/Menü3 gesteuert,
* Die Sidebar ausgabe in der index.php wird unter Admincenter/Menüs/Menü4 gesteuert,
* Die Footer ausgabe wird unter Admincenter/Menüs/Menü5 gesteuert

# Videos 
* [Video1](https://www.youtube.com/watch?v=W1D1WGp3ilU) - #1 Installation
* [Video2](https://www.youtube.com/watch?v=eruu7AGSmA8) - #2 Startseite
* [Video3](https://www.youtube.com/watch?v=zSo979JWsPY) - #3 Modul anpassungen 
