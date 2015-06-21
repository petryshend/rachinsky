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
     * @ORM\OneToOne(targetEntity="AnswerUnit")
     */
    protected $AnswerUnit;

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
     * Set AnswerUnit
     *
     * @param \RachinskyAdminBundle\Entity\AnswerUnit $AnswerUnit
     * @return Answer
     */
    public function setAnswerUnit(\RachinskyAdminBundle\Entity\AnswerUnit $AnswerUnit = null)
    {
        $this->AnswerUnit = $AnswerUnit;

        return $this;
    }

    /**
     * Get AnswerUnit
     *
     * @return \RachinskyAdminBundle\Entity\AnswerUnit 
     */
    public function getAnswerUnit()
    {
        return $this->AnswerUnit;
    }
}
