
CREATE TABLE patients (
    ID CHAR(5),
    name VARCHAR(50) NOT NULL,
    severity INTEGER NOT NULL,
    start_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    time_in_queue TIMESTAMP NOT NULL,
    expected_wait_time INTERVAL NOT NULL,
    is_waiting BIT  NOT NULL DEFAULT 1,
    primary key (ID),
);

CREATE TABLE users (
    ID CHAR(5),
    username VARCHAR(20) UNIQUE NOT NULL,
    password CHAR(3) NOT NULL,
    role VARCHAR(5) NOT NULL, --Admin/User.
    primary key (ID),
);