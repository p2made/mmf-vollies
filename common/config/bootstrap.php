<?php
Yii::setAlias('@common',	dirname(__DIR__));
Yii::setAlias('@assets',	dirname(dirname(__DIR__)) . '/assets');
Yii::setAlias('@backend',   dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@frontend',  dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@console',   dirname(dirname(__DIR__)) . '/console');


/* dev */
Yii::setAlias('assetsUrl', 'http://static.mmf.yii.dev');

/* prod */
//Yii::setAlias('assetsUrl', 'http://static.malenymusicfestival.com');
