maxTime <- merge(results, aggregate(timestamp ~ unique_id+site+page, results, min))
maxTime <- merge(results, aggregate(timestamp ~ unique_id+site+page, results, max))
xtabs(~unique_id+site+acceleration, results)
