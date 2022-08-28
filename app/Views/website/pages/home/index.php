<?php define('INCLUDES', 'website/pages/home/includes/') ?>

<?= $this->extend('website/layouts/default') ?>

<?= $this->section('title') ?>HomePage<?= $this->endSection('title') ?>

<?= $this->section('content') ?>

<?= $this->include(INCLUDES . 'about') ?>

<?= $this->include(INCLUDES . 'services') ?>

<?= $this->include(INCLUDES . 'overlay1') ?>

<?= $this->include(INCLUDES . 'portfolio') ?>

<?= $this->include(INCLUDES . 'parceiros') ?>

<?= $this->include(INCLUDES . 'team') ?>

<?= $this->include(INCLUDES . 'contact') ?>

<?= $this->include('website/includes/backtop') ?>

<?= $this->endSection('content') ?>

