legitlength <- data.frame(id=(character()),
                 result=character(),
                 stringsAsFactors=FALSE)

for(s in c('P1' .. 'P30'))
{
  x <- results$mouseX[results$unique_id == s & results$site == 'legit']
  y <- results$mouseY[results$unique_id == s & results$site == 'legit']

  dataframe <- data.frame(X = x,
                          Y = y)

  plot(Y ~ X, data = dataframe, xlim=c(0, 100), ylim=c(500,0))

  length <- 0

  for(i in 1:nrow(dataframe)) {
    for(j in 1:nrow(dataframe)) {
      X1 <- dataframe[i,1]
      Y1 <- dataframe[i,2]
      X2 <- dataframe[j,1]
      Y2 <- dataframe[j,2]
      first <- abs((X1 - X2) * (X1 - X2))
      second <- abs((Y1 - Y2) * (Y1 - Y2))
      result <- sqrt(first + second)
      length <- length + result
    }
  }

  legitlength[s,1] <- s
  legitlength[s,2] <- round(length)
}

write.csv(legitlength, file = "length_legit.csv")
