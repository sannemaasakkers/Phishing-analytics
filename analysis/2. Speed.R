# Calculate difference in percentage on screen
results$diffX <- ave(results$mouseX, factor(results$unique_id), FUN=function(x) c(NA,diff(x)))
results$diffY <- ave(results$mouseY, factor(results$unique_id), FUN=function(x) c(NA,diff(x)))

# Calculate distance
results$diffDistance <- round(sqrt((results$diffX * results$diffX) + (results$diffY * results$diffY)), digits = 2)

# Calculate acceleration 
results$acceleration <- round((1000 * results$diffDistance / results$diffTimestamp), digits = 2)

# Remove Inf
results$acceleration[results$acceleration == 'Inf'] <- 0
