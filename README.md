How to use it?

    Clone the repository with CLI:
    git clone https://github.com/Bazsmagister/WordChain.git
    Copy .env.example file to .env and edit database credentials there
    Run composer install
    Run php artisan key:generate

(It gives a new seed)
php artisan migrate:fresh --seed

Usage:
You write in a word, and it fetches from the preseeded database a word that is begin with a letter, that your word's last letter.
It contains some simple validation also.
It only works with normal letters, (with those doesn't work (yet) :öüőúéáű)

(Added React to it)

I made it from learning purpose.
Have fun!
