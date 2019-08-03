results <- read.csv("results.csv")

x <- results$mouseX[results$unique_id == 'P30' & results$site == 'phishing']
y <- results$mouseY[results$unique_id == 'P30' & results$site == 'phishing']
dataframe <- data.frame(X = x,
                        Y = y)
conHullPosition <- chull(dataframe)
conHull <- rbind(dataframe[conHullPosition,],dataframe[conHullPosition[1],])
# plot(Y ~ X, data = dataframe, xlim=c(0, max(x)), ylim=c(max(y),0))
# lines(conHull)

# write.csv(results, file = "results.csv")

amplitude <- 0

for(i in 1:nrow(conHull)) {
  for(j in 1:nrow(conHull)) {
    X1 <- conHull[i,1]
    Y1 <- conHull[i,2]
    X2 <- conHull[j,1]
    Y2 <- conHull[j,2]
    first <- abs((X1 - X2) * (X1 - X2))
    second <- abs((Y1 - Y2) * (Y1 - Y2))
    result <- sqrt(first + second)
    if(result > amplitude) {
      amplitude <- result
    }
  }
}

round(amplitude)
