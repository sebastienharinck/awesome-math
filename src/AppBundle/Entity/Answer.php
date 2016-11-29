<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table(name="answer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnswerRepository")
 */
class Answer
{

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Question")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var bool
     *
     * @ORM\Column(name="correct", type="boolean")
     */
    private $correct;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Answer
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set correct
     *
     * @param boolean $correct
     *
     * @return Answer
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;

        return $this;
    }

    /**
     * Get correct
     *
     * @return bool
     */
    public function getCorrect()
    {
        return $this->correct;
    }

    /**
     * Set question
     *
     * @param \AppBundle\Entity\Question $question
     *
     * @return Answer
     */
    public function setQuestion(\AppBundle\Entity\Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \AppBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
