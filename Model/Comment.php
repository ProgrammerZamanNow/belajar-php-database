<?php

namespace Model {

    class Comment
    {

        public function __construct(private ?int $id = null,
                                    private ?string $email = null,
                                    private ?string $comment = null)
        {
        }

        /**
         * @return int|null
         */
        public function getId(): ?int
        {
            return $this->id;
        }

        /**
         * @param int|null $id
         */
        public function setId(?int $id): void
        {
            $this->id = $id;
        }

        /**
         * @return string|null
         */
        public function getEmail(): ?string
        {
            return $this->email;
        }

        /**
         * @param string|null $email
         */
        public function setEmail(?string $email): void
        {
            $this->email = $email;
        }

        /**
         * @return string|null
         */
        public function getComment(): ?string
        {
            return $this->comment;
        }

        /**
         * @param string|null $comment
         */
        public function setComment(?string $comment): void
        {
            $this->comment = $comment;
        }


    }

}
