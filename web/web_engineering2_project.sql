CREATE DATABASE rock_paper_scissors;


  CREATE TABLE results (
    game_id SERIAL PRIMARY KEY,
    win BOOLEAN,
    loss BOOLEAN,
    input VARCHAR(9) NOT NULL  
    );

    CREATE TABLE wins (
    game_id INT REFERENCES results(game_id),
    win BOOLEAN,
    rock BOOLEAN NOT NULL,
    paper BOOLEAN NOT NULL,
    scissors BOOLEAN NOT NULL
  );

    CREATE TABLE losses (
    game_id INT REFERENCES results(game_id),
    loss BOOLEAN,
    rock BOOLEAN NOT NULL,
    paper BOOLEAN NOT NULL,
    scissors BOOLEAN NOT NULL
  );
INSERT INTO losses (loss, rock, paper, scissors)
VALUES (TRUE, FALSE, FALSE, TRUE);