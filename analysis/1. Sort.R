library(dplyr)
library(plyr)

clicks <- read.csv(file="clicks.csv", header=TRUE, sep=";")
moves <- read.csv(file="moves.csv", header=TRUE, sep=";")
keys <- read.csv(file="keys.csv", header=TRUE, sep=";")
users <- read.csv(file="users.csv", header=TRUE, sep=";")

clicks$id <- NULL
keys$id <- NULL
moves$id <- NULL
users$id <- NULL

moves$diffTimestamp <- ave(moves$timestamp, factor(moves$unique_id), FUN=function(x) c(NA,diff(x)))

moves$diffTimestamp[is.na(moves$diffTimestamp)] <- 0

page <- 0
previous_page_timestamp <- moves[1, 4]
latest_page_timestamp <- 100000000000
counter <- 10

moves$page <- 1

for(k in 2:nrow(moves)) {
    if (moves[k, 4] - latest_page_timestamp < -100) {
      page <- page + 1;
      previous_page_timestamp <- latest_page_timestamp
      latest_page_timestamp <- moves[k, 4]
      counter <- 10
      moves[k, 8] <- page
    }

    else if((moves[k, 4] > previous_page_timestamp) && counter > 0) {
      previous_page_timestamp <- moves[k, 4]
      moves[k, 8] <- page - 1
    }

    else {
      latest_page_timestamp = moves[k, 4]
      counter <- counter - 1
      moves[k, 8] <- page
    }
}

moves <- merge(moves, users, by="unique_id")

moves$mouseX <- floor(moves$mouseX * 100 / moves$dimensionX)
moves$mouseY <- floor(moves$mouseY * 100 / moves$dimensionY)

moves$created_at <- NULL
moves$updated_at <- NULL
moves$dimensionX <- NULL
moves$dimensionY <- NULL

clicks <- merge(clicks, users, by="unique_id")

clicks$mouseX <- floor(clicks$mouseX * 100 / clicks$dimensionX)
clicks$mouseY <- floor(clicks$mouseY * 100 / clicks$dimensionY)

clicks$created_at <- NULL
clicks$updates_at <- NULL
clicks$dimensionX <- NULL
clicks$dimensionY <- NULL

moves <- arrange(moves, moves$unique_id, moves$site, moves$page, moves$timestamp)

moves$diffTimestamp <- ave(moves$timestamp, factor(moves$unique_id), FUN=function(x) c(NA,diff(x)))

moves$diffTimestamp[moves$diffTimestamp < 0] <- 0
