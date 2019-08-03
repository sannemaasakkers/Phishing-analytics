results <- read.csv("/Users/Sanne/Documents/GitHub/CSV/28-07-2018/results.csv")



sampleFreq <- cbind(results)

sampleFreq$freq <- round(1 / (results$diffTimestamp / 1000))

sampleFreq$freq[is.na(sampleFreq$freq)] <- 0
sampleFreq$freq[is.infinite(sampleFreq$freq)] <- 0
sampleFreq$freq[is.nan(sampleFreq$freq)] <- 0
sampleFreq <- sampleFreq[sampleFreq$freq != 0,]

sampleFreqMean <- round(mean(sampleFreq$freq))
sampleFreqSD <- round(sd(sampleFreq$freq))

sd_to_fill <- 1
lower_bound <- sampleFreqMean - sampleFreqSD * sd_to_fill
upper_bound <- sampleFreqMean + sampleFreqSD * sd_to_fill

xfreq <- seq(-4, 4, length = 1000) * sampleFreqSD + sampleFreqMean
yfreq <- dnorm(xfreq, sampleFreqMean, sampleFreqSD)

plot(xfreq, yfreq, type="n", xlab = "Moves per second", ylab = "", main = "Distribution of sample frequency", axes = FALSE)
lines(xfreq, yfreq)

bounds_filter <- xfreq >= lower_bound & xfreq <= upper_bound
x_within_bounds <- x[bounds_filter]
y_within_bounds <- y[bounds_filter]

x_polygon <- c(lower_bound, x_within_bounds, upper_bound)
y_polygon <- c(0, y_within_bounds, 0)

polygon(x_polygon, y_polygon, col = "red")

probability_within_bounds <- pnorm(upper_bound, sampleFreqMean, sampleFreqSD) - pnorm(lower_bound, sampleFreqMean, sampleFreqSD)

text <- paste("p(", lower_bound, "< frequency <", upper_bound, ") =", signif(probability_within_bounds, digits = 3))
mtext(text)

sd_axis_bounds = 5
axis_bounds <- seq(-sd_axis_bounds * sampleFreqSD + sampleFreqMean, sd_axis_bounds * sampleFreqSD + sampleFreqMean, by = sampleFreqSD)
axis(side = 1, at = axis_bounds, pos = 0)


round(1000 / min(sampleFreq$diffTimestamp[sampleFreq$unique_id == 'P29']))

