<?php

class ExEntity {
	private $id;
	private $name;
	private $title;
	private $category;
	private $description;

	function __construct($name, $title, $category, $description) {
		$this->name = $name;
		$this->title = $title;
		$this->category = $category;
		$this->description = $description;
	}

	function getId() {
		return $this->id;
	}
	function getName() {
		return $this->name;
	}
	function getTitle() {
		return $this->title;
	}
	function getCategory() {
		return $this->category;
	}
	function getDescription() {
		return $this->description;
	}
}