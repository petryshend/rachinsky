<?php

namespace RachinskyAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Answer {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $answerText;

    /**
     * @ORM\ManyToOne(targetEntity="Problem")
     */
    protected $problem;

    /**
     * @ORM\OneToOne(targetEntity="AnswerUnits")
     */
    protected $answerUnits;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set answerText
     *
     * @param string $answerText
     * @return Answer
     */
    public function setAnswerText($answerText)
    {
        $this->answerText = $answerText;

        return $this;
    }

    /**
     * Get answerText
     *
     * @return string 
     */
    public function getAnswerText()
    {
        return $this->answerText;
    }

    /**
     * Set problem
     *
     * @param \RachinskyAdminBundle\Entity\Problem $problem
     * @return Answer
     */
    public function setProblem(\RachinskyAdminBundle\Entity\Problem $problem = null)
    {
        $this->problem = $problem;

        return $this;
    }

    /**
     * Get problem
     *
     * @return \RachinskyAdminBundle\Entity\Problem 
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * Set answerUnits
     *
     * @param \RachinskyAdminBundle\Entity\AnswerUnits $answerUnits
     * @return Answer
     */
    public function setAnswerUnits(\RachinskyAdminBundle\Entity\AnswerUnits $answerUnits = null)
    {
        $this->answerUnits = $answerUnits;

        return $this;
    }

    /**
     * Get answerUnits
     *
     * @return \RachinskyAdminBundle\Entity\AnswerUnits 
     */
    public function getAnswerUnits()
    {
        return $this->answerUnits;
    }
}
