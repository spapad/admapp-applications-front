<?php

use yii\bootstrap\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Διαχειριστικές λειτουργίες';
$this->params['breadcrumbs'][] = $this->title;

?>

<h1>Διαχειριστικές λειτουργίες</h1>

<div class="body-content">

    <div class="row">
        <div class="col-lg-4">
            <h2>Ενεργοποίηση αιτήσεων</h2>
            <?php if ($enable_applications === true) : ?>
                <p>Η υποβολή των αιτήσεων είναι <strong><span class="text-success">ενεργοποιημένη.</span></strong>.</p>
                <p><?= Html::a('Απενεργοποίηση', Url::to(['enable-applications/confirm-enable']), ['class' => 'btn btn-danger', 'data-method' => 'POST']) ?></p>
            <?php else: ?>
                <p>Η υποβολή των αιτήσεων είναι <strong><span class="text-danger">απενεργοποιημένη.</span></strong></p>
                <p><?= Html::a('Ενεργοποίηση', Url::to(['enable-applications/confirm-enable']), ['class' => 'btn btn-primary', 'data-method' => 'POST']) ?></p>
            <?php endif; ?>
        </div>
        <div class="col-lg-4">
            <h2>Εξαγωγή αιτήσεων</h2>
            <p>Η λειτουργία αυτή εξάγει όλες τις μη διεγραμμένες αιτήσεις σε μορφή CSV.</p>
            <p><?= Html::a(Html::icon('save') . ' Εξαγωγή σε CSV', Url::to(['admin/export-csv']), ['class' => 'btn btn-primary', 'data-method' => 'POST']) ?></p>
        </div>
        <div class="col-lg-4">
            <h2>Επισκόπηση στοιχείων</h2>
            <p>Εμφάνιση συνοπτικών στατιστικών.</p>
            <p><?= Html::a('Προβολή', Url::to(['admin/overview']), ['class' => 'btn btn-primary']) ?></p>
        </div>
    </div>

</div>
