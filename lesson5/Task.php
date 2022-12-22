<?php


class Task {
    private User $owner;
    private array $comments = [];

    private string $description;
    private string $dateCreated;
    private string $dateUpdated;
    private ?string $dateDone;
    private int $priority;
    private bool $isDone = false;

    public function  __construct(User $owner, string $description, int $priority) 
    {
        $this->description = $description;
        $this->priority = $priority;
        $this->dateCreated();
        $this->dateUpdated();
    }

    public function setDescription(string $description, int $priority) :void
    {
        $this->description = $description;
        $this->priority = $priority;
        $this->dateUpdated();
    }

    private function createDT(): string
    {
        $format = 'd.m.y h:i:s';
        $dateTime = new DateTime();
        return $dateTime->format($format);
    }
    private function dateCreated() :void
    {
       
        $this->dateCreated = $this->createDT();
    }
    private function dateUpdated() :void
    {
        
        $this->dateUpdated = $this->createDT();
    }

    public function markAsDone() :void
    {
        $this->isDone = true;
        $this->dateDone();

    }
    
    private function dateDone() :void
    {
        $this->dateDone = $this->createDT();
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDateCreated()
    {
       return $this->dateCreate;
    }

    public function getDateUpdated()
    {
       return $this->dateUpdated;
    }

    public function getDateDone()  
    {
       return $this->dateDone;
    }

    public function getPriority() :int
    {
       return $this->priority;
    }

    public function getIsDone() :bool
    {
       return $this->isDone;
    }

    public function setComment(Comment $comment) :void
    {
        $this->comments[] = $comment;
    }

    public function getComment() :array
    {
       return $this->comments;
    }
}
